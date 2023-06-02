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
        return redirect()->route('teachers.create');
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
    public function edit()
    {
        return view('subjects.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $subject_id)
    {
        $subject = Subject::find($subject_id);
        // $subject->update([
        //     "user_name" => $request->user_name,
        //     "login_id" => $request->login_id,
        // ]);
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
