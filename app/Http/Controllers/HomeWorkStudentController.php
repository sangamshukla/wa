<?php

namespace App\Http\Controllers;

use App\Models\AssignedHomeWork;
use App\Models\AssignedHomeWorkStudent;
use App\Models\Batch;
use App\Models\BatchSession;
use App\Models\OrderPayment;
use App\Models\OrderSessionMap;
use App\Models\ResourceMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeWorkStudentController extends Controller
{
    public function index($id)
    {
        $user_id = auth()->user()->id;
        $sessionDetails = BatchSession::where('id', $id)->get();
        $batches = Batch::all();
        // $homeworks = DB::table('assigned_home_work_students AS ahws')
        //     ->join('assigned_home_works AS ahw', 'ahws.assigned_homework_id', '=', 'ahw.id')
        //     ->where('student_id', $user_id)
        //     ->where('session_id', $id)
        //     ->get();
        $homeworks = AssignedHomeWork::where('session_id', $id)->get();
        // dd($homeworks);

        return view('dashboard.homework', compact('sessionDetails', 'homeworks'));
    }
    public function sessionDetail()
    {
        $sessions = OrderPayment::join('order_items', 'order_payments.id', '=', 'order_items.order_payment_id')
            ->join('batches', 'order_items.batch_id', '=', 'batches.id')
            // ->join()
            ->select('order_items.batch_id', 'order_payments.student_id', 'batches.name')
            ->get();
        foreach ($sessions as $session) {
            echo '<pre>';
            print_r($session);
        }
        $pre_homeworks = ResourceMaster::all();
        foreach ($pre_homeworks as $pre_homework) {
            echo '<pre>';
            print_r($pre_homework);
        }

        return view('dashboard.homework');
    }
    public function allHomeWorks()
    {
        $assignedHomework = AssignedHomeWorkStudent::join('assigned_home_works', 'assigned_home_work_students.assigned_homework_id', '=', 'assigned_home_works.id')
            ->where('assigned_home_work_students.student_id', auth()->user()->id)
            ->get();
        dd($assignedHomework);
        foreach ($assignedHomework as $homeworks) {
            echo '<pre>';
            print_r($homeworks);
        }
    }
    public function submitHomework(Request $request, $id)
    {
        $homeworks = AssignedHomeWork::where('id', $id)->get();
        // dd($homeworks);  
        return view('dashboard.homework-answer', compact('homeworks'));
    }
}
