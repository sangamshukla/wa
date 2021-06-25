<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
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
        $data=User::where('role', 'teacher')->get();
        // dd($data);
        foreach ($data as $data) {
            // dump($data->sessions);
        }
        return view('operation.batchlist');
    }
    public function purchaseSession()
    {
        return view('operation.purchase-session');
    }
}
