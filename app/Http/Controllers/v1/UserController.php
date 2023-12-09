<?php

declare(strict_types=1);

namespace App\Http\Controllers\v1;

use App\Enums\DefaultMessages;
use App\Http\Controllers\Controller;
use App\Models\MPerson;
use App\Models\RelPersonUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    protected $model;
    protected $personModel;
    protected $relPersonUserModel;

    public function __construct()
    {
        $this->model = new User();
        $this->personModel = new MPerson();
        $this->relPersonUserModel = new RelPersonUser();
    }

    /**
     * Login user and create token.
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('username', 'password'))) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = User::where('username', $request['username'])
            ->firstOrFail()
        ;

        if ('' === $user->email_verified_at || null === $user->email_verified_at) {
            return response()->json([
                'message' => 'Unverified. Please, verify your email address.',
            ], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('auth_token');
        $token = $tokenResult->plainTextToken;

        return response()->json([
            'accessToken' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function registration(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate(
                [
                    '*.username' => 'required|string|max:15|unique:users,username',
                    '*.email' => 'required|string|email|unique:users,email',
                    '*.password' => [
                        'required',
                        'confirmed',
                        Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols(),
                    ],
                    '*.type' => 'required|string|max:12|in:admin,operator',
                    '*.first_name' => 'required|string|max:20',
                    '*.last_name' => 'required|string|max:20',
                    '*.address' => 'nullable|string',
                    '*.gender' => 'required|string|max:1|in:m,f',
                    '*.active' => 'required|boolean',
                    '*.school_id' => 'required|integer|exists:m_school,id',
                ]
            );

            $results = null;
            foreach ($request->all() as $data) {
                $check = User::where('email', $data['email'])->where('username', $data['username'])->first();
                if ($check) {
                    return $this->badRequestApiResponse(['message' => 'The user you entered already exist!']);
                }
                $person = [
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'gender' => $data['gender'],
                    'active' => $data['active'],
                ];
                $personSave = $this->personModel->batchOperations([$person], 'insert');
                $personId = $personSave['success'][0]['id'];

                $user = [
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'type' => $data['type'],
                    'active' => $data['active'],
                    'created_at' => Carbon::now(),
                ];

                $userSave = User::create($user);
                $userId = $userSave->id;

                $relPersonUser = [
                    'person_id' => $personId,
                    'user_id' => $userId,
                    'school_id' => $data['school_id'],
                    'created_by' => null,
                ];

                $this->relPersonUserModel->batchOperations([$relPersonUser], 'insert');
                $results = $userSave;
            }
            DB::commit();

            return $this->okApiResponse([$results]);
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

    public function get(Request $request)
    {
        try {
            $result = $this->model->getData($request->id);
            $searchFields = ['mpn.first_name', 'mpn.last_name', 'u.username', 'u.email'];

            return $this->okApiResponse($result, '', $searchFields);
        } catch (\Throwable $th) {
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
                    '*.id' => 'required|integer|exists:users,id',
                ]
            );

            foreach ($request->all() as $req) {
                // get Id MStudent From Request
                $id = $req['id'];

                // find whole data with relation
                $relPersonUser = RelPersonUser::where('user_id', $id)->first();

                if ($relPersonUser) {
                    $person = MPerson::where('id', $relPersonUser->person_id)->first();
                    if ($person) {
                        $person->delete();
                        $relPersonUser->delete();
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
