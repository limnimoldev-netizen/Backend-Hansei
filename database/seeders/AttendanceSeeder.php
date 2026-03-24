<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        
        DB::table('attendances')->insert([


            'employee_id' => 1, 
            'check_in'    => '2026-03-24 08:00:00', 
            'check_out'   => '2026-03-24 17:00:00',
            'work_hour'   => '9',
            'reason'      => 'Regular shift',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}




