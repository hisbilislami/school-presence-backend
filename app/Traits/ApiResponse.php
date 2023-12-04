<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\DefaultMessages;
use App\Helpers\HttpResponse as Response;
use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

trait ApiResponse
{
    // Do not check tenancy in the following tables
    protected $transactionTable = false;

    protected $orderBy;
    protected $sortBy = 'DESC';
    protected $skipQueryfilter = false;

    /**
     * Prepare response.
     */
    public function prepareApiResponse(string $message = '', int $statusCode = Response::HTTP_OK, int $total = 0): array
    {
        if (empty($message)) {
            $message = Response::$statusTexts[$statusCode];
        }

        return [
            'total' => $total,
            'message' => $message,
            'statusCode' => $statusCode,
        ];
    }

    /**
     * Filter query result for multitenancy.
     *
     * @param mixed|null $school_id
     *
     * @return Builder
     */
    private function filterQuery(Builder $query, $school_id = null)
    {
        /**
         * If $query->from contains `as` i.e. `m_student as ms`
         * Then parse first part as $tableName
         * and last part as $tableRef.
         */
        $mainTable = $query->from;
        if (!\is_string($mainTable)) {
            $mainTable = $mainTable->getValue();
        }

        if (str_contains($mainTable, ' as ')) {
            $explodedTableName = explode(' as ', $mainTable);
            if (2 === \count(explode(' as ', $mainTable))) {
                [$tableName, $tableRef] = $explodedTableName;
            } else {
                $tableRef = $tableName = str_replace('"', '', $explodedTableName[\count($explodedTableName) - 1]);
            }
        } else {
            $tableRef = $tableName = $mainTable;
        }

        if (!\in_array($tableName, config('global-table'), true)) {
            $user = Auth::user();
            if (null === $school_id) {
                $school_id = $user->relPersonUsers->first()->school_id ?? null;
            }
            if ('m_school' !== $tableName) {
                if (str_contains($tableName, 'm_')) {
                    // when table name is `master` / `m_` put school_id filter
                    $query = $query->whereRaw('('.$tableRef.'.school_id is NULL OR '.$tableRef.".school_id = '".$school_id."')");
                }
            }
        }

        if (empty($query->groups) && empty($query->distinct) && empty($query->orders)) {
            if (empty($this->orderBy)) {
                if (!str_contains($mainTable, 'rel_')) {
                    $query->orderBy($tableRef.'.id', $this->sortBy);
                }
            } else {
                if (\is_array($this->orderBy)) {
                    foreach ($this->orderBy as $key => $orderBy) {
                        if (is_numeric($key)) {
                            $query->orderBy($orderBy, $this->sortBy);
                        } else {
                            $query->orderBy($key, $orderBy);
                        }
                    }
                } else {
                    $query->orderBy($this->orderBy, $this->sortBy);
                }
            }
        }

        return $query;
    }

    public function filterQueryReport(Builder $query, $userId = null, $transactionReportByClient = false)
    {
        $auth = Auth::user();
        if ($auth) {
            $schoolId = $auth->relPersonUsers->first()->school_id;
        } elseif (null !== $userId) {
            $user = User::find($userId);
            if (null === $user) {
                return false;
            }
            $schoolId = $user->relPersonUsers->first()->school_id;
        } else {
            return false;
        }
        if (!$transactionReportByClient) {
            return $this->filterQuery($query)->get();
        }
        if (str_contains($query->from, ' as ')) {
            [$tableName, $tableRef] = explode(' as ', $query->from);
        // i.e. $tableName = m_city, $tableRef = mc
        } else {
            // Otherwise, return as is i.e. m_city
            $tableRef = $tableName = $query->from;
        }

        $checkRelatedPlant = \count(array_intersect(array_map('strtolower', explode(' ', 'm_school')), array_column($query->joins, 'table')));
        if (0 === $checkRelatedPlant) {
            $query->join('m_school', 'm_school.id', '=', $tableRef.'.school_id');
        }

        return $query->get();
    }

    public function buildDataReport($data, $userId = null, $groupByField = null, $totalField = null, $orderBy = null, $sortBy = 'DESC', $transactionReportByClient = false)
    {
        $this->orderBy = $orderBy;
        $this->sortBy = $sortBy;
        if ($data instanceof Builder) {
            $data = $this->filterQueryReport($data, $userId, transactionReportByClient: $transactionReportByClient);
        }
        // $data = $query->get();
        $groupByValue = false;
        $resultData = [];
        $row = 1;
        $totalPerGroup = 0;

        /*
         * looping grouping data by field
         */
        foreach ($data as $key => $value) {
            if (!empty($groupByField)) {
                if ($value->{$groupByField} !== $groupByValue) {
                    $groupByValue = $value->{$groupByField};
                    $resultData[$groupByValue] = [];
                    $row = 1;
                    $totalPerGroup = 0;
                }
            } else {
                if (0 !== $groupByValue) {
                    $groupByValue = 0;
                    $resultData[$groupByValue] = [];
                    $row = 1;
                    $totalPerGroup = 0;
                }
            }
            if (!empty($totalField)) {
                if (isset($value->{$totalField})) {
                    $totalPerGroup += $value->{$totalField};
                }
            }
            $value->row_id = $row;
            $resultData[$groupByValue]['total'] = $totalPerGroup;
            $resultData[$groupByValue]['data'][] = $value;
            ++$row;
        }

        return $resultData;
    }

    /**
     * Pagination function.
     *
     * @return object
     */
    private function paginate(Builder $query, array $searchFields = ['name'], bool $customSearch = false)
    {
        // Parse parameters
        $offset = (int) request()->query('offset', '0');
        $limit = (int) request()->query('per_page', '20');
        $schoolId = request()->query('school_id', null);
        $queryTerm = request()->query('query');
        $searchFields = request()->query('search_field', $searchFields);
        $selectedFields = request()->query('selected_fields', ['*']); // returned get fields
        $page = (int) floor($offset / $limit) + 1;

        $multipleSearch = (int) request()->query('multiple_search');
        $exactSearch = (int) request()->query('exact_search');

        try {
            // Search terms if exist
            if (null !== $queryTerm && !$customSearch) {
                // if multiple search mode, split queryTerm
                $queryTerm = strtolower($queryTerm);
                if ($multipleSearch || $exactSearch) {
                    $queryTerm = explode('|', $queryTerm);
                }

                // grouping searchTerm into one "AND"
                // example in sql is like " .... AND(name ILIKE '%AU%' OR code ILIKE '%AU%')"
                $query = $query->where(
                    static function ($query) use ($searchFields, $queryTerm, $multipleSearch, $exactSearch): void {
                        foreach ($searchFields as $index => $search) { // loop for specific column search
                            // if use multiple search, use term index
                            $term = ($multipleSearch || $exactSearch) ? $queryTerm[$index] : $queryTerm;

                            // if query column is not empty
                            if ('' !== $term && null !== $term) {
                                if ($exactSearch) {
                                    $searchQuery = 'REPLACE('.$search.', \'\'\'\', \'\')=\''.preg_replace('/[^\da-z. ]/', '', $term).'\'';
                                } else {
                                    $searchQuery = 'REPLACE('.$search.'::TEXT, \'\'\'\', \'\') ILIKE \'%'.preg_replace('/[^\da-z. ]/', '', $term).'%\'';
                                }

                                $query = $query->whereRaw(
                                    $searchQuery,
                                    [],
                                    (0 === $index || $multipleSearch) ? 'AND' : 'OR' // first `where` should be AND otherwise `OR`
                                );
                            }
                        }
                    }
                );
            }

            if (!$this->skipQueryfilter) {
                $query = $this->filterQuery($query, school_id: $schoolId);
            }

            // if `per_page` parameter is -1, use paginate instead, because it return all records
            $queryResults = $query->paginate($limit, $selectedFields, 'page', $page);
            $totalResults = $queryResults->total();

            return (object) [
                'results' => $queryResults->items(),
                'total' => $totalResults,
            ];
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            abort($this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]));
        }
    }

    private function getCachedQueryTotal(Builder $builder)
    {
        // return query with bindings
        $rawQuery = $this->getQueryWithBindings($builder);
        // calculate hashed value of query
        $hashedQuery = crc32($rawQuery);

        // if total is available, return it instead of direct query
        return (int) Cache::remember('total_query_'.$hashedQuery, 45 * 60, static function () use ($rawQuery) {
            // store total for 45 minutes
            return DB::select("SELECT COUNT(*) AS aggregate FROM ({$rawQuery}) AS total")[0]->aggregate;
        });
    }

    public static function getQueryWithBindings(Builder $query)
    {
        $sql = $query->toSql();
        $bindings = $query->getBindings();

        return preg_replace_callback('/\?/', static function ($match) use (&$bindings) {
            return str_replace('"', "'", json_encode(array_shift($bindings)));
        }, $sql);
    }

    /**
     * Success Response.
     */
    public function successApiResponse(mixed $data, int $statusCode = Response::HTTP_OK, string $message = '', array $searchFields = ['name'], bool $customSearch = false): JsonResponse
    {
        if ($data instanceof Builder) {
            $paginated = $this->paginate($data, $searchFields, $customSearch);
            $data = $paginated->results;
            $total = $paginated->total;
        } else {
            if ($data instanceof \stdClass) {
                // if anonymous class returned, format as an array
                $data = [$data];
            }
            // only count success data because in $data have 2 array success and failure
            // sooo we just want to count success only
            if (\array_key_exists('success', $data)) {
                $total = \count($data['success']);
            } else {
                $total = \count($data);
            }
        }

        $response = $this->prepareApiResponse($message, $statusCode, $total);
        $response['results'] = $data;

        return response()->json($response, $statusCode);
    }

    /**
     * Success response for eloquent.
     */
    public function eloquentSuccessApiResponse(Collection $data, string $message = ''): JsonResponse
    {
        $response = $this->prepareApiResponse($message, Response::HTTP_OK);

        $perPage = request()->query('per_page', '10');
        $offset = request()->query('offset', '10');
        $page = (int) floor((int) $offset / (int) $perPage) + 1;
        if ($perPage) {
            $pagination = $this->paginateCollection($data, $perPage, $page);
            $response['current_page'] = $pagination->currentPage();
            $data = array_values($pagination->toArray()['data']);
        }

        $response['results'] = $data;

        return response()->json($response, Response::HTTP_OK);
    }

    public function paginateCollection($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    /**
     * Error Response.
     */
    public function errorApiResponse(array $errors, int $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR, string $message = ''): JsonResponse
    {
        $response = $this->prepareApiResponse($message, $statusCode);
        $response['errors'] = $errors;

        return response()->json($response, $statusCode);
    }

    /**
     * Response with status code 200.
     *
     * bentuk orderBy adalah string, array single dimensi [{order_by_1},{order_by_2}], associative array [{order_by_1}=>'ASC', {order_by_1} =>'DESC']
     * bentuk sortBy adalah string
     *
     * @param bool       $skipQueryfilter : use for skip using function filter query on paginate function. you can use this in case your query has long union query. But in the other hands you have add where clause school_id by your self and order by if needed
     *                                    Default Value is False
     * @param mixed|null $orderBy
     */
    public function okApiResponse(mixed $data, string $message = 'Success', array $searchFields = ['name'], bool $customSearch = false, bool $transactionTable = false, $orderBy = null, $sortBy = 'DESC', $skipQueryfilter = false): JsonResponse
    {
        $this->transactionTable = $transactionTable;
        $this->orderBy = $orderBy;
        $this->sortBy = $sortBy;
        $this->skipQueryfilter = $skipQueryfilter;

        return $this->successApiResponse($data, Response::HTTP_OK, $message, $searchFields, $customSearch);
    }

    /**
     * Response with status code 201.
     */
    public function createdApiResponse(mixed $data, string $message = 'Created'): JsonResponse
    {
        return $this->successApiResponse($data, Response::HTTP_CREATED, $message);
    }

    /**
     * Response with status code 400.
     */
    public function badRequestApiResponse(array $data, string $message = 'Bad Requests'): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_BAD_REQUEST, $message);
    }

    /**
     * Response with status code 401.
     */
    public function unauthorizedApiResponse(array $data, string $message = 'Unauthorized Access'): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_UNAUTHORIZED, $message);
    }

    /**
     * Response with status code 403.
     */
    public function forbiddenApiResponse(array $data, string $message = 'Forbidden'): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_FORBIDDEN, $message);
    }

    /**
     * Response with status code 404.
     */
    public function notFoundApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_NOT_FOUND, $message);
    }

    /**
     * Response with status code 409.
     */
    public function conflictApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_CONFLICT, $message);
    }

    /**
     * Response with status code 422.
     */
    public function unprocessableApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_UNPROCESSABLE_ENTITY, $message);
    }
}
