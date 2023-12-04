<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'class'], function (): void {
    Route::get('/get', [App\Http\Controllers\v1\MClassController::class, 'get']);
    Route::get('/get/{id}', [App\Http\Controllers\v1\MClassController::class, 'get']);
    Route::post('/insert', [App\Http\Controllers\v1\MClassController::class, 'insert']);
    Route::put('/update', [App\Http\Controllers\v1\MClassController::class, 'update']);
    Route::delete('/delete', [App\Http\Controllers\v1\MClassController::class, 'delete']);
});
