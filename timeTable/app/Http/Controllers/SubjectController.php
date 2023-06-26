<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::get();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $errors = [];
        return view('subjects.create', compact('errors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Subject::create($request->post());
        return redirect()->route('subjects.index');
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
    public function edit($subject_id)
    {
        $subject = Subject::find($subject_id);
        return view('subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $subject_id)
    {
        $subject = Subject::find($subject_id);
        $subject->update([
            "subject_name" => $request->subject_name,
            "year" => $request->year,
            "period" => $request->period,
            "teaching_form" => $request->teaching_form,
            "number_of_units" => $request->number_of_units,
            "subject_classification" => $request->subject_classification,
            "subject_content" => $request->subject_content,
        ]);
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($subject_id)
    {
        Subject::find($subject_id)->delete();
        return redirect()->route('subjects.index');
    }
}
