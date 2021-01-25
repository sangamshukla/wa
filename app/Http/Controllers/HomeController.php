<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    // public function index()
    // {
    //     if (auth()->user()->role === 'admin') {
    //         return redirect('/admin-dashboard');
    //     } else {
    //         return redirect('/student-dashboard');
    //     }
    // }

    public function index()
    {
        if (auth()->user()->role === 'admin') {
            return redirect('/admin-dashboard');
        } elseif (auth()->user()->role === 'teacher') {
            return redirect('/teacher-dashboard');
        } else {
            return redirect('/operation-dashboard');
        }
    }
    
    // public function studentDasboard()
    // {
    //     return view('dashboard');
    // }
    public function adminDashboard()
    {
        return view('dashboard.admin');
    }

    public function teacherDashboard()
    {
        return view('dashboard.teacher');
    }


    public function operationDashboard()
    {
        return view('dashboard.operation');
    }
}
