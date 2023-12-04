<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Constants;
use App\Enums\DefaultMessages;
use App\Traits\ApiResponse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * App\Models\HIModel.
 *
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property int|null                                                                        $permissions_count
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[]       $roles
 * @property int|null                                                                        $roles_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|HIModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HIModel newQuery()
 * @method static \Illuminate\Database\Query\Builder|HIModel    onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|HIModel permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|HIModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|HIModel role($roles, $guard = null)
 * @method static \Illuminate\Database\Query\Builder|HIModel    withTrashed()
 * @method static \Illuminate\Database\Query\Builder|HIModel    withoutTrashed()
 *
 * @mixin \Eloquent
 */
class HIModel extends Model
{
    use ApiResponse;
    use HasFactory;
    use SoftDeletes;

    protected $uniqueColumns;

    private function createWithTrashed($item)
    {
        try {
            return $this->create($item);
        } catch (QueryException $e) {
            DB::rollBack();
            if (Constants::PG_DUPLICATE_ERROR_CODE->value === $e->getCode()) {
                return $this->badRequestApiResponse(['message' => 'Duplicate ID'], 'This identity number has been used by another person');
            }
            throw $e;
        }
    }

    public function checkRelation($listData, $listRelation)
    {
        foreach ($listData as $data) {
            foreach ($listRelation as $relation) {
                if (null !== $data->{$relation}) {
                    if ($data->{$relation}->count() > 0) {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    /**
     * Batch operations (insert / update / delete).
     *
     * @return array|Model
     */
    public function batchOperations(
        array $items,
        string $ops = 'insert',
        array $config = []
    ) {
        // parse config
        $skipCreator = $config['skip_creator'] ?? false;
        $returnModel = $config['return_model'] ?? false;
        $forceDelete = $config['force_delete'] ?? false;
        $schoolId = $config['school_id'] ?? null;
        $modelObject = null;
        $this->uniqueColumns = $config['unique_columns'] ?? [];

        // return vars
        $results = [
            'success' => [],
            'failed' => [],
        ];

        // put tenant information
        if ($schoolId) {
            $initTenant = [
                'school_id' => $schoolId,
            ];
        } else {
            $user = Auth::user();
            $timezone = 'Asia/Jakarta';
            // set timezone
            date_default_timezone_set($timezone);
            if (str_contains($this->table, 'm_')) {
                $initTenant = [
                    'school_id' => $user->relPersonUsers->first()->school_id ?? null,
                ];
            } elseif (str_contains($this->table, 't_')) {
                $initTenant = [
                    'school_id' => $user->relPersonUsers->first()->school_id ?? null,
                ];
            }
        }

        // get current user ID
        $skipCreator ? null : $userId = Auth::id();

        if (\count($items) > 1) {
            // Loop over items for batch operations
            try {
                DB::beginTransaction();
                foreach ($items as $item) {
                    $tenant = [];
                    if (isset($initTenant)) {
                        $tenant = $initTenant;
                        if (isset($item['school_id'])) {
                            $tenant['school_id'] = $item['school_id'];
                        }
                    }

                    // Fill `created_by` field by current user
                    $item['created_by'] = $skipCreator ? null : $userId;
                    switch ($ops) {
                        case 'insert':
                            $item = array_merge($item, $tenant); // merge tenant information
                            $insertId = $this->createWithTrashed($item)->id;
                            if (0 !== $insertId) {
                                $item['id'] = $insertId;
                                $results['success'][] = $item;
                            } else {
                                $results['failed'][] = $item;
                            }
                            break;

                        case 'update':
                            // Fill `updated_by` field by current user
                            $item['updated_by'] = $skipCreator ? null : $userId;
                            if ($this->where('id', $item['id'])->lock()->update($item)) {
                                $results['success'][] = $item;
                            } else {
                                $results['failed'][] = $item;
                            }
                            break;

                        case 'delete':
                            // Set active to false when item isdeleted
                            $item['active'] = false;
                            $item['updated_by'] = $skipCreator ? null : $userId;
                            $selectData = $this->where('id', $item['id'])->lock();
                            if ($forceDelete) {
                                $delete = $selectData->forceDelete();
                            } else {
                                $delete = $selectData->delete();
                            }
                            if ($delete) {
                                $results['success'][] = $item;
                            } else {
                                $results['failed'][] = $item;
                            }
                            break;
                    }
                }
                DB::commit();
                if ($returnModel) {
                    return $this;
                }

                return $results;
            } catch (\Throwable $th) {
                if (config('app.debug')) {
                    throw $th;
                }
                DB::rollBack();
                abort($this->badRequestApiResponse(['error' => DefaultMessages::ACTION_FAILED]));
            }
        } else {
            // Single item
            try {
                $item = $items[0];
                $item['created_by'] = $skipCreator ? null : $userId;
                switch ($ops) {
                    case 'insert':
                        $tenant = [];
                        if (isset($initTenant)) {
                            $tenant = $initTenant;
                            if (isset($item['school_id'])) {
                                $tenant['school_id'] = $item['school_id'];
                            }
                        }
                        $item = array_merge($item, $tenant); // merge tenant information
                        $modelObject = $this->createWithTrashed($item);
                        if (0 !== $modelObject->id) {
                            $item['id'] = $modelObject->id;
                            $results['success'][] = $item;
                        } else {
                            $results['failed'][] = $item;
                        }
                        break;

                    case 'update':
                        $item['updated_by'] = $skipCreator ? null : $userId;
                        $modelObject = $this->where('id', $item['id'])->lock()->update($item);
                        if ($modelObject) {
                            $results['success'][] = $item;
                        } else {
                            $results['failed'][] = $item;
                        }
                        break;

                    case 'delete':
                        $item['active'] = false;
                        $item['updated_by'] = $skipCreator ? null : $userId;
                        $modelObject = $this->where('id', $item['id'])->lock();
                        if ($forceDelete) {
                            $delete = $modelObject->forceDelete();
                        } else {
                            $delete = $modelObject->delete();
                        }
                        if ($delete) {
                            $results['success'][] = $item;
                        } else {
                            $results['failed'][] = $item;
                        }
                        break;
                }

                if ($returnModel) {
                    return $modelObject;
                }

                return $results;
            } catch (QueryException $e) {
                throw $e;
            } catch (\Throwable $th) {
                if (config('app.debug')) {
                    throw $th;
                }
                abort($this->badRequestApiResponse(['error' => DefaultMessages::ACTION_FAILED]));
            }
        }
    }

    /**
     * Function Update batch only.
     */
    // update data on registration
    public function updateOnlyByFk($items)
    {
        try {
            DB::beginTransaction();
            // get user id

            DB::table($items['mainTable'])
                ->where($items['fkColumnName'], $items['fkId'])  // find Id Registration
                ->update($items['changeValue'])
            ;

            DB::commit();

            return [
                'success' => $items,
                'failed' => [],
            ];
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
