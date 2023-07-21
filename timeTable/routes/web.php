<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/test', 'TeacherController@test');
Route::get('/home', function () {
    return view('home');
});

Route::resource('teachers', 'TeacherController');
Route::resource('subjects', 'SubjectController');
Route::resource('departments', 'DepartmentController');
Route::resource('classrooms', 'ClassroomController');
Route::resource('department_by_teachers', 'DepartmentByTeacherController');
Route::resource('subject_by_teachers', 'SubjectByTeacherController');
Route::resource('weekly_time_tables', 'WeeklyTimeTableController');
Route::post('weekly_time_tables/searched', 'WeeklyTimeTableController@index')->name('weekly_time_tables_searched');
Route::resource('calendars', 'CalendarController');
