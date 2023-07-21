<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\TeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $errors = [];
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        Teacher::create($request->post());
        return redirect()->route('teachers.create');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        return view('teachers.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        $teacher->update([
            "user_name" => $request->user_name,
        ]);
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($teacher_id)
    {
        Teacher::find($teacher_id)->delete();
        return redirect()->route('teachers.index');
    }
    public function test()
    {
        $teachers = Teacher::get();
        return view('department_by_teachers.create',compact('teachers'));
    }
}
