<?php

namespace Database\Seeders;

use App\Models\SubjectByTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectByTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubjectByTeacher::create([
            "subject_id" => 8,
            "teacher_id" => 2,
        ]);
        SubjectByTeacher::create([
            "subject_id" => 2,
            "teacher_id" => 3,
        ]);
        SubjectByTeacher::create([
            "subject_id" => 4,
            "teacher_id" => 4,
        ]);
    }
}
