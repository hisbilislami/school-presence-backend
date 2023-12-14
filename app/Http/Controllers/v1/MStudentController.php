<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MPerson;
use App\Models\MStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class MStudentController extends Controller
{
    protected $model;
    protected $personModel;

    public function __construct()
    {
        $this->model = new MStudent();
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
            $searchFields = ['mpn.first_name', 'mpn.last_name', 'ms.nis', 'ms.email'];

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
                    '*.nis' => 'required|string|max:25',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.email' => 'nullable|string|email',
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MStudent::where('school_id', Auth::user()->relPersonUsers[0]->school_id)->where('nis', $data['nis'])->first();
                if ($check) {
                    return $this->badRequestApiResponse(['message' => 'The student you entered already exist!']);
                }
                $person = [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'gender' => $data['gender'],
                    'active' => true,
                ];
                $personSave = $this->personModel->batchOperations([$person], 'insert');
                $personId = $personSave['success'][0]['id'];

                $student = [
                    'person_id' => $personId,
                    'nis' => $data['nis'],
                    'email' => $data['email'],
                    'school_id' => Auth::user()->relPersonUsers[0]->school_id,
                ];

                $studentSave = $this->model->batchOperations([$student], 'insert');
                $results = $studentSave;
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
                    '*.id' => 'required|integer|exists:m_student,id',
                    '*.person_id' => 'required|integer|exists:m_person,id',
                    '*.nis' => 'required|string|max:25',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.email' => 'nullable|string|email',
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MStudent::where('school_id', Auth::user()->relPersonUsers[0]->school_id)->where('nis', $data['nis'])->first();
                if ($check && $check->id !== (int) $data['id']) {
                    return $this->badRequestApiResponse(['message' => 'The student you entered already exist!']);
                }

                $person = [
                    'id' => $data['person_id'],
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'gender' => $data['gender'],
                    'active' => true,
                ];

                $this->personModel->batchOperations([$person], 'update');

                $student = [
                    'id' => $data['id'],
                    'person_id' => $data['person_id'],
                    'nis' => $data['nis'],
                    'email' => $data['email'],
                    'school_id' => Auth::user()->relPersonUsers[0]->school_id,
                ];
                $studentUpdate = $this->model->batchOperations([$student], 'update');
                $results = $studentUpdate;
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
                    '*.id' => 'required|integer|exists:m_student,id',
                ]
            );

            foreach ($request->all() as $req) {
                // get Id MStudent From Request
                $id = $req['id'];

                // find whole data with relation
                $student = MStudent::where('id', $id)
                    ->first()
                ;

                if ($student) {
                    $person = MPerson::where('id', $student->person_id)->first();
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
