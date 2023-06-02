<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

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
        $errors = [];
        return view('teachers.create',compact('errors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $errors = [];
        if($request->user_name == ''){
            $errors['user_name'] = 'ユーザー名が空です';
        }
        if($request->login_id == ''){
            $errors['login_id'] = 'ログインIDが空です';
        }
        if($request->password == ''){
            $errors['password'] = 'パスワードが空です';
        }
        if(mb_strlen($request->password) <= 7){
            $errors['password_short'] = 'パスワードが8文字以上ではありません';
        }
        if($errors == []){
            Teacher::create($request->post());
            return redirect()->route('teachers.create');
        }else{
            return view('teachers.create',compact('errors'));
        }
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
    public function edit()
    {
        return view('teachers.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        $teacher->update([
            "user_name" => $request->user_name,
            "login_id" => $request->login_id,
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
}
