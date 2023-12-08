<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'school'], static function (): void {
    Route::get('/get', [App\Http\Controllers\v1\MSchoolController::class, 'get']);
    Route::get('/get/{id}', [App\Http\Controllers\v1\MSchoolController::class, 'get']);
    Route::post('/insert', [App\Http\Controllers\v1\MSchoolController::class, 'insert']);
    Route::put('/update', [App\Http\Controllers\v1\MSchoolController::class, 'update']);
    Route::delete('/delete', [App\Http\Controllers\v1\MSchoolController::class, 'delete']);
});
