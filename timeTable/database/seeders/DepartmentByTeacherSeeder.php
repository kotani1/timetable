<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DepartmentByTeacher;


class DepartmentByTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DepartmentByTeacher::create([
            "department_id" => 1,
            "teacher_id" => 2,
            "school_year" => 1
        ]);
        DepartmentByTeacher::create([
            "department_id" => 2,
            "teacher_id" => 7,
            "school_year" => 1
        ]);
        DepartmentByTeacher::create([
            "department_id" => 3,
            "teacher_id" => 8,
            "school_year" => 1
        ]);
    }
}
