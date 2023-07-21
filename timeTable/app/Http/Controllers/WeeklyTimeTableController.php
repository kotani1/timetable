<?php

namespace App\Http\Controllers;

use App\Models\DepartmentByTeacher;
use App\Models\WeeklyTimeTable;
use App\Models\SubjectByTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeeklyTimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $weekly_time_tables = [];
        $class_name = [];
        if($request->department_by_teacher_id != NULL){
            $class = DepartmentByTeacher::find($request->department_by_teacher_id);
            $class_name = $class->school_year .'年生' . $class->department['department_name'] . '学科';

            $department_by_teacher_id = $request->department_by_teacher_id;
            $weekly_time_tables =  WeeklyTimeTable::where(
                'department_by_teacher_id',
                '=',
                $request->department_by_teacher_id
            )->orderBy('period', 'asc')->orderByRaw("
                CASE day_of_week
                WHEN '月' THEN 1
                WHEN '火' THEN 2
                WHEN '水' THEN 3
                WHEN '木' THEN 4
                WHEN '金' THEN 5 END ")->get();
        }

        $department_by_teachers = DepartmentByTeacher::get();
        return view('weekly_time_tables.index', compact('weekly_time_tables', 'department_by_teachers', 'class_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subject_by_teachers = SubjectByTeacher::get();
        $weekly_time_tables =  WeeklyTimeTable::orderBy('period', 'asc')->orderByRaw("
        CASE day_of_week
        WHEN '月' THEN 1
        WHEN '火' THEN 2
        WHEN '水' THEN 3
        WHEN '木' THEN 4
        WHEN '金' THEN 5 END ")->get();
        return view('weekly_time_tables.create', compact('subject_by_teachers', 'weekly_time_tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubjectByTeacher::create($request->post());
        return redirect()->route('subject_by_teachers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($subject_by_teacher_id)
    {
        $subject_by_teacher = SubjectByTeacher::find($subject_by_teacher_id);
        return view('weekly_time_tables.edit', compact('subject_by_teacher', 'subjects', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $subject_by_teacher_id)
    {
        $subject_by_teacher = SubjectByTeacher::find($subject_by_teacher_id);
        $subject_by_teacher::update($request->post());
        return redirect()->route('weekly_time_tables.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($subject_by_teacher_id)
    {
        SubjectByTeacher::find($subject_by_teacher_id)->delete();
        return redirect()->route('weekly_time_tables.index');
    }
}
