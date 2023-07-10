<?php

namespace App\Http\Controllers;

use App\Models\DepartmentByTeacher;
use Illuminate\Http\Request;

class DepartmentByTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department_by_teachers = DepartmentByTeacher::get();
        return view('department_by_teachers.index', compact('department_by_teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department_by_teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DepartmentByTeacher::create($request->post());
        return redirect()->route('department_by_teachers.index');
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
    public function edit($department_by_teacher_id)
    {
        $department_by_teacher = DepartmentByTeacher::find($department_by_teacher_id);
        return view('department_by_teachers.edit', compact('department_by_teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $department_by_teacher_id)
    {
        $department_by_teacher = DepartmentByTeacher::find($department_by_teacher_id);
        $department_by_teacher::update($request->post());
        return redirect()->route('department_by_teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($department_by_teacher_id)
    {
        DepartmentByTeacher::find($department_by_teacher_id)->delete();
        return redirect()->route('department_by_teachers.index');
    }
}
