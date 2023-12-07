<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function Update(Request $request)
    {
        try {
            DB::beginTransaction();
            $request->validate(
                [
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

            foreach ($request->all() as $req) {
                // // get Id MClass From Request
                // $id = $req['id'];
                //
                // // list Relation
                // $listRelation = [
                //     'm_homeroom_teacher',
                // ];
                //
                // // find whole data with relation
                // $classModel = MClass::with($listRelation)
                //     ->where('id', $id)
                //     ->first()
                // ;
                //
                // // validate Foreign key
                // foreach ($listRelation as $relation) {
                //     if (null !== $classModel->{$relation}) {
                //         if ($classModel->{$relation}->count() > 0) {
                //             return $this->badRequestApiResponse(['message' => 'Data cannot be deleted because has been used on transaction']);
                //         }
                //     }
                // }
            }

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
