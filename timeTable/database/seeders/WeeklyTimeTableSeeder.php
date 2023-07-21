<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WeeklyTimeTable;


class WeeklyTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '月',
            'period' => 1,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '月',
            'period' => 2,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 2,
            'department_by_teacher_id' => 4,
            'day_of_week' => '月',
            'period' => 3,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 2,
            'department_by_teacher_id' => 4,
            'day_of_week' => '月',
            'period' => 4,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '火',
            'period' => 1,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 3,
            'department_by_teacher_id' => 4,
            'day_of_week' => '火',
            'period' => 2,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '火',
            'period' => 3,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '火',
            'period' => 4,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '水',
            'period' => 1,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '水',
            'period' => 2,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '水',
            'period' => 3,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '水',
            'period' => 4,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 2,
            'department_by_teacher_id' => 4,
            'day_of_week' => '木',
            'period' => 1,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '木',
            'period' => 2,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '木',
            'period' => 3,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '木',
            'period' => 4,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '金',
            'period' => 1,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '金',
            'period' => 2,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 0,
            'department_by_teacher_id' => 4,
            'day_of_week' => '金',
            'period' => 3,
        ]);
        WeeklyTimeTable::create([
            'subject_by_teacher_id' => 3,
            'department_by_teacher_id' => 4,
            'day_of_week' => '金',
            'period' => 4,
        ]);
    }
}
