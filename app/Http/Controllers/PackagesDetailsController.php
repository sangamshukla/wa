<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackagesDetailsController extends Controller
{
    public function packagesDetails(Request $request)
    {
        $totals = Batch::whereHas('batchSession', function ($query) {
            $query->whereDate('start_date_time', '>=', Carbon::today());
        })->count();
        $totalprice = Batch::whereHas('batchSession', function ($query) {
            $query->whereDate('start_date_time', '>=', Carbon::today());
        })->count();
        $totnoofseats = Batch::whereHas('batchSession', function ($query) {
            $query->whereDate('start_date_time', '>=', Carbon::today());
        })->count();

        $batches = Batch::whereHas('batchSession', function ($query) {
            $query->whereDate('start_date_time', '>=', Carbon::today());
        })->latest()->paginate(8);

        // $batch = \App\Batch::paginate(2);
        return view('dashboard.packages-details', compact('totals', 'totalprice', 'totnoofseats', 'batches'));
    }
}
