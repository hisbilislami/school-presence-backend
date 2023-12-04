<?php

declare(strict_types=1);
// app/Auth/CustomUserProvider.php

namespace App\Auth;

use Illuminate\Auth\EloquentUserProvider as BaseEloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\DB;

class BillUserProvider implements BaseEloquentUserProvider
{
    // Implement the UserProvider interface methods
    public function retrieveById($identifier): void
    {
        dd('hello');
        // return DB::table('rel_person_user', 'rpu')
        //     ->select(
        //         'users.id',
        //         'users.username',
        //         'users.email',
        //         'rpu.school_id'
        //     )
        //     ->join('users', 'users.id', '=', 'rpu.user_id')
        //     ->first()
        // ;
    }

    public function retrieveByToken($identifier, $token): void
    {
    }

    public function updateRememberToken(Authenticatable $user, $token): void
    {
    }

    public function retrieveByCredentials(array $credentials): void
    {
        // dd('hello world');
        // return DB::table('rel_person_user', 'rpu')
        //     ->select(
        //         'users.id',
        //         'users.username',
        //         'users.email',
        //         'rpu.school_id'
        //     )
        //     ->join('users', 'users.id', '=', 'rpu.user_id')
        //     ->first()
        // ;
    }

    public function validateCredentials(Authenticatable $user, array $credentials): void
    {
    }
}
