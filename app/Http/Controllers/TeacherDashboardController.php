<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        $batches = Batch::whereCreatedBy(auth()->user()->id)->orWhere('name', auth()->id())->latest()->get();
        $startweek = Carbon::now()->startOfWeek();
        $endweek = Carbon::now()->endOfWeek();
        // dd($endweek);
        $upcomingbatches = Batch::whereCreatedBy(auth()->user()->id)->orWhere('name', auth()->id())->whereBetween('batch_start_date', [$startweek, $endweek])->get();
        // dd($upcomingbatches);
        return view('teacher.dashboard', compact('batches'));
    }
}
