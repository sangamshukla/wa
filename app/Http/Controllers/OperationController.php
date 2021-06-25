<?php

namespace App\Http\Controllers;

use App\Models\BatchSession;
use App\Models\Teacher;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $data=DB::table('users AS u')
        //             ->join('batches AS b', 'b.created_by', '=', 'u.id')
        //             ->join('batch_session AS bs', 'bs.batch_id', '=', 'b.id')
        //             ->where('bs.start_date_time', "2021-06-25 16:00:00")
        //             ->get();
        // dd();
        $data=User::where('role', 'teacher')->get();
        $sessions=BatchSession::whereDate('start_date_time', Carbon::today())->get();
        // dd($sessions);
        return view('operation.teacher-management', compact('data', 'sessions'));
    }
    public function batchList()
    {

        // dd($data);
        // foreach($data as $data)
        // {
        //     foreach($data->batches as $batches)
        //     {
        //         foreach($batches->batchSession as $sessions)
        //         {
        //             if($sessions->start_date_time<Carbon::now())
        //             {
        //                 echo $sessions;
        //             }
        //         }
        //     }
        // }
        // return view('operation.batchlist');
        // foreach ($data as $data) {
        //     // dump($data->sessions);
        // }
        return view('operation.batchlist');
    }
    public function purchaseSession()
    {
        return view('operation.purchase-session');
    }
}
