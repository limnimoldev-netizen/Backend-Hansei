<?php

namespace App\Http\Controllers;

use Illuminate\Http\Attendance;
use Illuminate\Database\Seeder;


class AttendanceController extends Controller
{
    //
    public function show()
    {
        $attendances = Attendance::all();
        return response()->json($attendances);
    }

    
}

