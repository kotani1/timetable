<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = Classroom::get();
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Classroom::create($request->post());
        return redirect()->route('classrooms.index');
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
    public function edit($classroom_id)
    {
        $classroom = Classroom::find($classroom_id);
        return view('classrooms.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $classroom_id)
    {
        $classroom = Classroom::find($classroom_id);
        $classroom->update([
            "classroom_name" => $request->classroom_name,
            "floor" => $request->floor,
            "capacity" => $request->capacity,
        ]);
        return redirect()->route('classrooms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($classroom_id)
    {
        Classroom::find($classroom_id)->delete();
        return redirect()->route('classrooms.index');
    }
}
