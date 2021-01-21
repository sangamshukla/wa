<?php

namespace App\Http\Controllers;

use App\Models\ClassMaster;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\WeeklyOff;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weekOff = WeeklyOff::all();
        $classMasters = ClassMaster::all();
        $subjects = Subject::all();
        return view('teacher.create', compact('weekOff', 'classMasters', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact_number'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'shift_start_time'=>'required',
            'shift_end_time'=>'required',
            'break_start_time'=>'required',
            'break_end_time'=>'required',
        ]);

        $teacher = Teacher::Create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact_number'=>$request->contact_number,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'shift_start_time'=>$request->shift_start_time,
            'shift_end_time'=>$request->shift_end_time,
            'break_start_time'=>$request->break_start_time,
            'break_end_time'=>$request->break_end_time,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
    public function login()
    {
        return view('admin.login');
    }
}
