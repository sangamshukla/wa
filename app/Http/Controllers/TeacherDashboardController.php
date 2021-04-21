<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        $batches = Batch::whereCreatedBy(auth()->user()->id)->orWhere('name', auth()->id())->latest()->get();
        return view('teacher.dashboard', compact('batches'));
    }
}
