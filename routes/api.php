<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['throttle:30,1'])->group(function (): void {
    Route::post('/login', [App\Http\Controllers\v1\UserController::class, 'login']);
    Route::post('/register', [App\Http\Controllers\v1\UserController::class, 'register']);
});

Route::group(['middleware' => 'auth:sanctum'], function (): void {
    require 'v1/class.api.php';
    require 'v1/student.api.php';
    require 'v1/school.api.php';
    require 'v1/user.api.php';
});
