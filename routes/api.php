<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/book1', function () {
    return ['message' => 'hello'];
});

Route::controller(BookController::class)->group(function () {
    Route::get('/books', 'index');
});