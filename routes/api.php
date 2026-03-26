<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;


Route::get('/employee/{id}', [EmployeeController::class, 'index']);
Route::get('/attendance/{id}', [AttendanceController::class, 'index']);
Route::get('/department/{id}', [DepartmentController::class, 'index']);
Route::get('/position/{id}', [PositionController::class, 'index']);





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


