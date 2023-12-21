<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class MSchoolController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new MSchool();
    }

    /**
     * Get data (single / bulk).
     */
    public function get(Request $request)
    {
        try {
            $result = $this->model->getData($request->id);
            $searchFields = ['m_school.name'];

            return $this->okApiResponse($result, '', $searchFields);
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }

    /**
     * Insert data batch or single.
     */
    public function insert(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate(
                [
                    'required|array',
                    '*' => 'required|array',
                    '*.name' => 'required|string',
                    '*.address' => 'required|string',
                    '*.phone_number' => 'required|string',
                    '*.active' => 'required|boolean',
                ]
            );

            foreach ($request->all() as $data) {
                $check = MSchool::where('name', $data['name'])->first();
                if ($check) {
                    return $this->badRequestApiResponse(['message' => 'The name you entered already exist!']);
                }
                $results = $this->model->batchOperations([$data], 'insert');
            }
            DB::commit();

            return $this->createdApiResponse($results);
        } catch (ValidationException $e) {
            DB::commit();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            DB::commit();

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }

    /**
     * Update data batch or single.
     */
    public function update(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate(
                [
                    'required|array',
                    '*' => 'required|array',
                    '*.id' => 'required|integer|exists:m_school,id',
                    '*.name' => 'required|string',
                    '*.address' => 'required|string',
                    '*.phone_number' => 'required|string',
                    '*.active' => 'required|boolean',
                ]
            );

            foreach ($request->all() as $data) {
                $check = MSchool::where('name', $data['name'])->first();
                if ($check && $check->id !== (int) $data['id']) {
                    return $this->badRequestApiResponse(['message' => 'The name you entered already exist!']);
                }

                $results = $this->model->batchOperations([$data], 'update');
            }
            DB::commit();

            return $this->createdApiResponse($results);
        } catch (ValidationException $e) {
            DB::commit();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            DB::commit();

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }

    /**
     * Delete data.
     */
    public function delete(Request $request)
    {
        try {
            // Validate request
            $request->validate(
                [
                    '*.id' => 'required|integer|exists:m_school,id',
                ]
            );

            $results = $this->model->batchOperations($request->all(), 'delete');

            return $this->okApiResponse($results);
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }
}
