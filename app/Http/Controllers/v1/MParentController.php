<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MPerson;
use App\Models\MParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $result = $this->model->getData($request->id);
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
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MParent::where('email', $data['email'])->first();
                if ($check) {
                    return $this->badRequestApiResponse(['message' => 'The email you entered already exist!']);
                }

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
                    '*.active' => 'required|boolean',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = MParent::where('email', $data['email'])->first();
                if ($check && $check->id !== (int) $data['id']) {
                    return $this->badRequestApiResponse(['message' => 'The email you entered already exist!']);
                }

                $results = $this->model->batchOperations([$data], 'update');
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
