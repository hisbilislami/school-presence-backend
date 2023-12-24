<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MClass;
use App\Models\MHomeRoomTeacher;
use App\Models\MPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class MHomeRoomTeacherController extends Controller
{
    protected $model;
    protected $homeRoomTeacherModel;
    protected $classModel;
    protected $personModel;

    public function __construct()
    {
        $this->model = new MHomeRoomTeacher();
        $this->classModel = new MClass();
        $this->personModel = new MPerson();
    }

    /**
     * Get data (single / bulk).
     */
    public function get(Request $request)
    {
        try {
            $id = $request->id;
            $id = null !== $id ? (int) $id : null;
            $result = $this->model->getData($id);
            $searchFields = ['mpn.first_name', 'mpn.last_name', 'mhr.email', 'mc.name'];

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
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.email' => 'required|string|email|unique:m_homeroom_teacher,email',
                    '*.class_id' => 'required|integer|exists:m_class,id',
                    '*.mobile_phone_number' => 'nullable|string',
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MHomeRoomTeacher::where('email', $data['email'])->first();
                if ($check) {
                    return $this->badRequestApiResponse(['message' => 'The email you entered already exist!']);
                }
                $person = [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'gender' => $data['gender'],
                    'active' => $data['active'],
                ];
                $personSave = $this->insertData($person);
                $personId = $personSave['success'][0]['id'];

                $parent = [
                    'person_id' => $personId,
                    'class_id' => $data['class_id'],
                    'email' => $data['email'],
                    'mobile_phone_number' => $data['mobile_phone_number'],
                    'active' => $data['active'],
                ];

                $results = $this->model->batchOperations([$parent], 'insert');
            }
            DB::commit();

            return $this->createdApiResponse($results);
        } catch (ValidationException $e) {
            DB::rollBack();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            DB::rollBack();

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
                    '*.id' => 'required|integer|exists:m_homeroom_teacher,id',
                    '*.email' => 'required|string|max:25',
                    '*.class_id' => 'required|integer|exists:m_class,id',
                    '*.person_id' => 'required|integer|exists:m_person,id',
                    '*.mobile_phone_number' => 'nullable|string',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MHomeRoomTeacher::where('email', $data['email'])->first();
                if ($check && $check->id !== (int) $data['id']) {
                    return $this->badRequestApiResponse(['message' => 'The email you entered already exist!']);
                }
                $person = [
                    'id' => $data['person_id'],
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'gender' => $data['gender'],
                    'active' => true,
                ];
                $this->personModel->batchOperations([$person], 'update person');

                $homeRoomTeacher = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'class_id' => $data['class_id'],
                    'person_id' => $data['person_id'],
                    'mobile_phone_number' => $data['mobile_phone_number'],
                    'active' => true,
                ];
                $updateHomeRoomTeacher = $this->model->batchOperations([$homeRoomTeacher], 'update');

                $results = $updateHomeRoomTeacher;
            }
            DB::commit();

            return $this->createdApiResponse($results);
        } catch (ValidationException $e) {
            DB::rollBack();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (\Throwable $th) {
            DB::rollBack();
            if (config('app.debug')) {
                throw $th;
            }

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
            DB::beginTransaction();
            $request->validate(
                [
                    '*.id' => 'required|integer|exists:m_homeroom_teacher,id',
                ]
            );
            foreach ($request->all() as $req) {
                // get Id MStudent From Request
                $id = $req['id'];

                // find whole data with relation
                $homeRoomTeacher = MHomeRoomTeacher::where('id', $id)
                    ->first()
                ;

                if ($homeRoomTeacher) {
                    $person = MPerson::where('id', $homeRoomTeacher->person_id)->first();
                    if ($person) {
                        $person->delete();
                    }
                }
            }
            $results = $this->model->batchOperations($request->all(), 'delete');
            DB::commit();

            return $this->okApiResponse($results);
        } catch (ValidationException $e) {
            DB::rollBack();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (\Throwable $th) {
            DB::rollBack();
            if (config('app.debug')) {
                throw $th;
            }

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }
}
