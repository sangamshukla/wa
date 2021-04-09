<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackagesDetailsController extends Controller
{
    public function packagesDetails(Request $request)
    {
        return view('dashboard.packages-details');
    }
}
