<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;


Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/attendances', [AttendanceController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/positions', [PositionController::class, 'index']);




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/employees', function () {
    return 'Hello employees';
            
});



Route::get('/departments', function () {
    return 'Hello departments';
});


Route::get('/positions', function () {
    return 'Hello positions';
});


