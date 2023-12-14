<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MParent;
use App\Models\MPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class MParentController extends Controller
{
    protected $model;
    protected $personModel;

    public function __construct()
    {
        $this->model = new MParent();
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
            $searchFields = ['mpn.first_name', 'mpn.last_name', 'mp.email', 'mp.mobile_phone_number'];

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
                    '*.person_id' => 'required|integer|exists:m_person,id',
                    '*.email' => 'nullable|string|email',
                    '*.mobile_phone_number' => 'required|string|max:20',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MParent::where('email', $data['email'])->first();
                if ($check) {
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
                $personSave = $this->personModel->batchOperations([$person], 'insert person');
                $results = $this->model->batchOperations([$data], 'insert');
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
                    '*.id' => 'required|integer|exists:m_parent,id',
                    '*.person_id' => 'required|integer|exists:m_person,id',
                    '*.email' => 'nullable|string|email',
                    '*.mobile_phone_number' => 'required|string|max:20',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MParent::where('email', $data['email'])->first();
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

                $parent = [
                    'id' => $data['id'],
                    'person_id' => $data['person_id'],
                    'email' => $data['email'],
                    'mobile_phone_number' => $data['mobile_phone_number'],
                    'active' => true,
                ];

                $parentUpdate = $this->model->batchOperations([$parent], 'update');

                $results = $parentUpdate;
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
