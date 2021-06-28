<?php

namespace App\Http\Controllers;

use App\Models\Batch;
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
    public function batchListGet()
    {
        return view('operation.batchlist');
    }
    public function batchList(Request $request)
    {
        $sessions=explode("/", $request->session_arr);
        $session=[];
        foreach ($sessions as $session_name) {
            $batch=BatchSession::where('id', $session_name)->get();
            array_push($session, $batch);
        }
        // dd($session);
        return view('operation.batchlist', compact('session'));
    }
    public function purchaseSession($id)
    {
        $students=User::where('role', 'student')->get();
        $sessions=BatchSession::where('batch_id', $id)->get();
        $batch = Batch::find($id);
        return view('operation.purchase-session', compact('sessions', 'students', 'batch'));
    }
    public function studentList($sessionId)
    {
        $studentList= DB::table('order_session_maps AS osm')
        ->join('order_payments AS op', 'osm.order_id', '=', 'op.id')
        ->where('osm.session_id', $sessionId)
        ->get();
        foreach($studentList as $students)
        {
            dump($students);
        }
    }
}
