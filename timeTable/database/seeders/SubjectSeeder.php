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
            "subject_name" => "アジャイル開発演習",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 3,
            "subject_classification" => "特にありません",
            "subject_content" =>"特にありません"
        ]);
        Subject::create([
            "subject_name" => "RPA演習",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 2,
            "subject_classification" => "特にありません",
            "subject_content" =>"特にありません"
        ]);
        Subject::create([
            "subject_name" => "卒業制作(企画・設計)",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 2,
            "subject_classification" => "特にありません",
            "subject_content" => "特にありません"
        ]);
        Subject::create([
            "subject_name" => "ビジネス文書",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "講義",
            "number_of_units" => 2,
            "subject_classification" => "特にありません",
            "subject_content" => "特にありません"
        ]);
        Subject::create([
            "subject_name" => "ビジネスプレゼン演習",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "講義",
            "number_of_units" => 1,
            "subject_classification" => "特にありません",
            "subject_content" => "特にありません"
        ]);
        Subject::create([
            "subject_name" => "AWSクラウド演習",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 2,
            "subject_classification" => "特にありません",
            "subject_content" => "特にありません"
        ]);
        Subject::create([
            "subject_name" => "AIプログラミング言語",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 2,
            "subject_classification" => "特にありません",
            "subject_content" => "特にありません"
        ]);
        Subject::create([
            "subject_name" => "社会人基礎講座Ⅱ",
            "year" => "2023",
            "period" => "前期",
            "teaching_form" => "実習",
            "number_of_units" => 1,
            "subject_classification" => "特にありません",
            "subject_content" => "特にありません"
        ]);
    }
}
