<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::create([
            "classroom_name"  => "201",
            "floor"  => "2",
            "capacity"  => "30",
        ]);
        Classroom::create([
            "classroom_name"  => "202",
            "floor"  => "2",
            "capacity"  => "40",
        ]);
        Classroom::create([
            "classroom_name"  => "テクノホール",
            "floor"  => "1",
            "capacity"  => "50",
        ]);
    }
}
