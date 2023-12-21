<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'parent'], static function (): void {
    Route::get('/get', [App\Http\Controllers\v1\MParentController::class, 'get']);
    Route::get('/get/{id}', [App\Http\Controllers\v1\MParentController::class, 'get']);
    Route::post('/insert', [App\Http\Controllers\v1\MParentController::class, 'insert']);
    Route::put('/update', [App\Http\Controllers\v1\MParentController::class, 'update']);
    Route::delete('/delete', [App\Http\Controllers\v1\MParentController::class, 'delete']);
});
