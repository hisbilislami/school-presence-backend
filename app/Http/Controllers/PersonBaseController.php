<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\DefaultMessages;
use App\Models\MPerson;
use Illuminate\Support\Facades\DB;

class PersonBaseController extends Controller
{
    public $personModel;

    public function __construct()
    {
        $this->personModel = new MPerson();
    }

    /**
     * Insert a single person data.
     *
     * @param array payload {
     *
     * @var first_name string|required
     * @var last_name  string|required
     * @var address    string|nullable
     * @var gender     string|(m|f)|required
     * @var active     boolean|required
     *
     * }
     */
    public function insertData(array $payload)
    {
        try {
            DB::beginTransaction();
            if (
                (!isset($payload['first_name']) || !\is_string($payload['first_name']))
                && (!isset($payload['last_name']) || !\is_string($payload['last_name']))
                && (!isset($payload['gender']) || !\is_string($payload['gender']))
                && (!isset($payload['active']) || !\is_bool($payload['active']))
            ) {
                throw new \InvalidArgumentException('Missing or invalid parameters.');
            }

            $results = $this->personModel->batchOperations([$payload], 'insert');
            DB::commit();

            return $results;
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            DB::rollBack();

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }

    /**
     * Update a single person data.
     *
     * @param array payload {
     *
     * @var id         integer|required
     * @var first_name string|required
     * @var last_name  string|required
     * @var address    string|nullable
     * @var gender     string|(m|f)|required
     * @var active     boolean|required
     *
     * }
     */
    public function updateData(array $payload)
    {
        try {
            DB::beginTransaction();
            if (
                (!isset($payload['id']) && !\is_int($payload['id']))
                && (!isset($payload['first_name']) || !\is_string($payload['first_name']))
                && (!isset($payload['last_name']) || !\is_string($payload['last_name']))
                && (!isset($payload['gender']) || !\is_string($payload['gender']))
                && (!isset($payload['active']) || !\is_bool($payload['active']))
            ) {
                throw new \InvalidArgumentException('Missing or invalid parameters.');
            }
            $results = $this->personModel->batchOperations([$payload], 'update');
            DB::commit();

            return $results;
        } catch (\Throwable $th) {
            if (config('app.debug')) {
                throw $th;
            }
            DB::rollBack();

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }

    /**
     * Delete data.
     */
    public function deleteData(int $id)
    {
        try {
            DB::beginTransaction();
            $results = $this->personModel->batchOperations([['id' => $id]], 'delete');
            DB::commit();

            return $results;
        } catch (\Throwable $th) {
            DB::rollBack();
            if (config('app.debug')) {
                throw $th;
            }

            return $this->badRequestApiResponse(['message' => DefaultMessages::ACTION_FAILED]);
        }
    }
}
