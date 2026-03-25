<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'show']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/employees', function () {
    return 'Hello employees';
});

Route::get('/attendances', function () {
    return 'Hello attendances';
});


Route::get('/departments', function () {
    return 'Hello departments';
});


Route::get('/positions', function () {
    return 'Hello positions';
});


