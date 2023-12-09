<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user'], static function (): void {
    Route::get('/get', [App\Http\Controllers\v1\UserController::class, 'get']);
    Route::get('/get/{id}', [App\Http\Controllers\v1\UserController::class, 'get']);
    Route::delete('/delete', [App\Http\Controllers\v1\UserController::class, 'delete']);
});
