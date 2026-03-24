<?php

namespace Database\Seeders;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    
    {
        DB::table('users')->insert([
            
            'name' => Str::random(10),
            
        ]);
    }
}
