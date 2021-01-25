<?php

namespace App\Http\Controllers;

use App\Mail\TeacherSuccessfullyRegistered;
use App\Models\ClassMaster;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use App\Models\WeeklyOff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $total = Teacher::count();
        // $teachers = Teacher::all();
        // $total = $teachers->count();
        // return $total;
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
            'user_type'=>'required',
        ]);

        $user = User::Create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact_number'=>$request->contact_number,
            'password' => bcrypt($request->email),
            'role'=>$request->user_type,
            
        ]);
        
        Teacher::Create([
            'user_id' => $user->id,
            'class_master_id' => $request->class_master_id,
            'user_type'=>$request->user_type,
        ]);

        Mail::to($user->email)->send(new TeacherSuccessfullyRegistered($user));
        return redirect()->back()->with('status', 'Teacher Added Successfully');
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
