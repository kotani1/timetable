<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\SubjectByTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectByTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject_by_teachers = SubjectByTeacher::get();
        return view('subject_by_teachers.index', compact('subject_by_teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::get();
        $teachers = Teacher::get();
        return view('subject_by_teachers.create',compact('subjects', 'teachers'));
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
        return view('subject_by_teachers.edit', compact('subject_by_teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $subject_by_teacher_id)
    {
        $subject_by_teacher = SubjectByTeacher::find($subject_by_teacher_id);
        $subject_by_teacher::update($request->post());
        return redirect()->route('subject_by_teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($subject_by_teacher_id)
    {
        SubjectByTeacher::find($subject_by_teacher_id)->delete();
        return redirect()->route('subject_by_teachers.index');
    }
}
