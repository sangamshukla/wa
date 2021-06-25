<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function index()
    {
        dd("this is operation");
    }
    public function oprationDashboard()
    {
        return view('operation.dashboard');
    }
    public function teacherManagement()
    {
        return view('operation.teacher-management');
    }
    public function batchList()
    {
        $data="Data here";
        dd($data);
        return view('operation.batchlist');
    }
}
