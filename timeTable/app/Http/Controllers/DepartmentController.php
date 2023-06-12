<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::get();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $errors = [];
        return view('departments.create', compact('errors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Department::create($request->post());
        return redirect()->route('departments.index');
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
    public function edit($department_id)
    {
        $department = Department::find($department_id);
        return view('departments.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $department_id)
    {
        $department = Department::find($department_id);
        $department->update([
            "department_name" => $request->department_name,
            "year" => $request->year,
            "period" => $request->period,
            "teaching_form" => $request->teaching_form,
            "number_of_units" => $request->number_of_units,
            "department_classification" => $request->department_classification,
            "department_content" => $request->department_content,
        ]);
        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($department_id)
    {
        Department::find($department_id)->delete();
        return redirect()->route('departments.index');
    }
}
