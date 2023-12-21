<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\PersonBaseController;
use App\Models\MParent;
use App\Models\MPerson;
use App\Models\MStudent;
use App\Models\RelParentStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Throwable;

class MParentController extends PersonBaseController
{
    protected $model;
    protected $relParentStudentModel;
    public $personModel;

    public function __construct()
    {
        $this->model = new MParent();
        $this->personModel = new MPerson();
        $this->relParentStudentModel = new RelParentStudent();
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
            $searchFields = ['mpn.first_name', 'mpn.last_name', 'mp.email', 'mp.mobile_phone_number'];

            return $this->okApiResponse($result, '', $searchFields);
        } catch (Throwable $th) {
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
                    '*.email' => 'required|string|email|unique:m_parent,email',
                    '*.mobile_phone_number' => 'nullable|string',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.active' => 'required|boolean',
                    '*.children' => 'required|array',
                    '*.children.*.person_id' => ['required', 'integer', Rule::exists('m_person', 'id')->where(function ($query): void {
                        $query->from('m_person')->join('m_student', 'm_student.person_id', '=', 'm_person.id');
                    }), 'valid_person_student_relation'],
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MParent::where('email', $data['email'])->first();
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
                    'email' => $data['email'],
                    'mobile_phone_number' => $data['mobile_phone_number'],
                    'active' => $data['active'],
                ];

                $results = $this->model->batchOperations([$parent], 'insert');
                $parentId = $results['success'][0]['id'];

                foreach ($data['children'] as $children) {
                    $studentId = MStudent::where('person_id', $children['person_id'])->first();
                    if ($studentId) {
                        RelParentStudent::updateOrCreate(
                            ['parent_id' => $parentId, 'student_id' => $studentId->id],
                            ['parent_id' => $parentId, 'student_id' => $studentId->id]
                        );
                    }
                }
            }
            DB::commit();

            return $this->createdApiResponse($results);
        } catch (ValidationException $e) {
            DB::rollBack();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (Throwable $th) {
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
                    'required|array',
                    '*' => 'required|array',
                    '*.person_id' => 'required|integer|exists:m_person,id',
                    '*.id' => 'required|integer|exists:m_parent,id',
                    '*.email' => 'required|string|email|unique:m_parent,email',
                    '*.mobile_phone_number' => 'nullable|string',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.active' => 'required|boolean',
                    '*.children' => 'required|array',
                    '*.children.*.person_id' => ['required', 'integer', Rule::exists('m_person', 'id')->where(function ($query): void {
                        $query->from('m_person')->join('m_student', 'm_student.person_id', '=', 'm_person.id');
                    }), 'valid_person_student_relation'],
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MParent::where('email', $data['email'])->first();

                if ($check && $check->id !== (int) $data['id']) {
                    return $this->badRequestApiResponse(['message' => 'The email you entered already exist!']);
                }

                $person = [
                    'id' => (int) $data['person_id'],
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'gender' => $data['gender'],
                    'active' => true,
                ];

                $this->updateData($person);

                $parent = [
                    'id' => $data['id'],
                    'person_id' => $data['person_id'],
                    'email' => $data['email'],
                    'mobile_phone_number' => $data['mobile_phone_number'],
                    'active' => true,
                ];

                $results = $this->model->batchOperations([$parent], 'update');
                $parentId = $data['id'];

                foreach ($data['children'] as $children) {
                    $studentId = MStudent::where('person_id', $children['person_id'])->first();
                    if ($studentId) {
                        RelParentStudent::updateOrCreate(
                            ['parent_id' => $parentId, 'student_id' => $studentId->id],
                            ['parent_id' => $parentId, 'student_id' => $studentId->id]
                        );
                    }
                }
            }
            DB::commit();

            return $this->createdApiResponse($results);
        } catch (ValidationException $e) {
            DB::rollBack();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (Throwable $th) {
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
                    '*.id' => 'required|integer|exists:m_parent,id',
                ]
            );

            foreach ($request->all() as $req) {
                // get Id MParent From Request
                $id = $req['id'];

                // find whole data with relation
                $parent = MParent::where('id', $id)
                    ->first()
                ;

                if ($parent) {
                    $person = MPerson::where('id', $parent->person_id)->first();
                    if ($person) {
                        $person->delete();
                    }
                }

                $relParentStudent = RelParentStudent::where('parent_id', $id)->get();

                if (\count($relParentStudent) > 0) {
                    foreach ($relParentStudent as $value) {
                        $value->delete();
                    }
                }
            }

            $results = $this->model->batchOperations($request->all(), 'delete');
            DB::commit();

            return $this->okApiResponse($results);
        } catch (ValidationException $e) {
            DB::rollBack();

            return $this->forbiddenApiResponse($e->errors(), $e->getMessage());
        } catch (Throwable $th) {
            DB::rollBack();
            if (config('app.debug')) {
                throw $th;
            }

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }
}
