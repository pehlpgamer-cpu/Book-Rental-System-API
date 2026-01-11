<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');





Route::prefix('v1')->group( function () {
    Route::controller(BookController::class)->group(function () {
        Route::get('/books', 'index');
        Route::get('/book/{id}', 'find');
        Route::post('/books', 'store');
        Route::patch('/patch/softDelete', 'softDelete');
    });
});

Route::prefix('v2')->group(function () {
    // ...
});


Route::middleware('auth:sanctum')->group(function () { // non-public routes

});