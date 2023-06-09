<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            "subject_name" => "java1",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 3,
            "subject_classification" => "これはテストです",
            "subject_content" =>"これはテストです"
        ]);
        Subject::create([
            "subject_name" => "php1",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 2,
            "subject_classification" => "これはテストです",
            "subject_content" =>"これはテストです"
        ]);
        Subject::create([
            "subject_name" => "php1",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 2,
            "subject_classification" => "これはテストです",
            "subject_content" =>"これはテストです"
        ]);
    }
}
