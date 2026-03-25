<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }

}