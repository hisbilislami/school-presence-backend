<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class MClassController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new MClass();
    }

    /**
     * Get data (single / bulk).
     *
     * @param mixed
     */
    public function get(Request $request)
    {
        try {
            $result = $this->model->getData($request->id);
            $searchFields = ['m_class.name', 'm_class.code'];

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
                    '*.code' => 'required|string|max:10',
                    '*.name' => 'required|string',
                    '*.active' => 'required|boolean',
                ]
            );

            foreach ($request->all() as $data) {
                $check = MClass::where('school_id', Auth::user()->relPersonUsers->first()->school_id)->where('code', $data['code'])->first();
                if ($check) {
                    return $this->badRequestApiResponse(['message' => 'The code you entered already exist!']);
                }
                $data['school_id'] = Auth::user()->relPersonUsers->first()->school_id;
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
                    '*.id' => 'required|integer|exists:m_class,id',
                    '*.code' => 'required|string|max:10',
                    '*.name' => 'required|string',
                    '*.active' => 'required|boolean',
                ]
            );

            foreach ($request->all() as $data) {
                $check = MClass::where('school_id', Auth::user()->relPersonUsers->first()->school_id)->where('code', $data['code'])->first();
                if ($check && $check->id !== (int) $data['id']) {
                    return $this->badRequestApiResponse(['message' => 'The code you entered already exist!']);
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
                    '*.id' => 'required|integer|exists:m_class,id',
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
