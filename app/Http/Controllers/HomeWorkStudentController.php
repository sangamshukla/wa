<?php

namespace App\Http\Controllers;

use App\Models\AssignedHomeWork;
use App\Models\AssignedHomeWorkAnswer;
use App\Models\AssignedHomeWorkAnswerMap;
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
        // dd($user_id);
        // $homeworks = AssignedHomeWork::where('session_id', $id)->get();
        $homeworks = DB::table('assigned_home_works AS ahw')
<<<<<<< HEAD
            ->join('assigned_homework_students AS ahws', 'ahw.id', '=', 'ahws.assigned_home_work_id')
=======
            ->join('assigned_home_work_students AS ahws', 'ahw.id', '=', 'ahws.assigned_home_work_id')
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
            ->join('batch_session AS bs', 'ahw.session_id', '=', 'bs.id')
            ->where('ahw.session_id', $id)
            ->where('ahws.student_id', $user_id)
            ->get();

<<<<<<< HEAD
        // dd($homeworks);
=======

>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        return view('dashboard.homework', compact('sessionDetails', 'homeworks'));
    }
    public function sessionDetail()
    {
        $sessions = OrderPayment::join('order_items', 'order_payments.id', '=', 'order_items.order_payment_id')
            ->join('batches', 'order_items.batch_id', '=', 'batches.id')
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

        $student_id = auth()->user()->id;
        $homeworks = AssignedHomeWorkStudent::where('assigned_home_work_id', $id)->where('student_id', $student_id)->get();
<<<<<<< HEAD
        $have_submitted=$this->have_submitted($student_id, $id);
       if($have_submitted)
        {
          $homework_content=$this->get_homework_content($student_id, $id);
          $homework_content='homeworks' . $id.'/'.$homework_content;
        }
        else
        {
          $homework_content=NULL;
        }
        return view('dashboard.homework-answer', compact('homeworks','have_submitted', 'homework_content'));
=======
        return view('dashboard.homework-answer', compact('homeworks'));
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        // $homeworks = AssignedHomeWork::where('id', $id)->get();
    }
    public function uploadHomework(Request $request)
    {
        // $request->validate([
        //     'homeworkFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        // dd($request->homeworkfiles);
        $homework_id = $request->homework_id;
        $map_id =  $request->map_id;
        $content_types = AssignedHomeWork::where('id', $homework_id)->select('type_of_homework')->get();
        foreach ($content_types as $content_type) {
            AssignedHomeWorkAnswer::create([
                'assigned_home_work_id' => $homework_id,
                'content_type' => $content_type->type_of_homework,
                'answered_content' => 'PDF',
                'student_id' => auth()->user()->id
            ]);
        }
        foreach ($request->homeworkfiles as $homeworkfile) {
            $homework_filename = $homeworkfile->getClientOriginalName();
            AssignedHomeWorkAnswerMap::create([
                'assigned_home_work_id' => $homework_id,
                'assigned_home_work_student_id' =>  $map_id,
                'image_path' => $homework_filename
            ]);
            $homeworkfile->storeAs('homeworks' . $request->homework_id, $homework_filename, 'public');
        }
    }
    public function uploadText(Request $request)
    {
        $homework_id = $request->homework_id;
        $my_data = $request->my_data;
        $content_types = AssignedHomeWork::where('id', $homework_id)->select('type_of_homework')->get();
        foreach ($content_types as $content_type) {
            AssignedHomeWorkAnswer::create([
                'assigned_home_work_id' => $homework_id,
                'content_type' => $content_type->type_of_homework,
                'answered_content' => $my_data,
                'student_id' => auth()->user()->id
            ]);
        }
    }
<<<<<<< HEAD
    public function have_submitted($student_id, $homework_id)
    {
        $exist=AssignedHomeWorkAnswer::where('assigned_home_work_id', $homework_id)->where('student_id', $student_id)->exists();
        if($exist)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_homework_content($student_id, $homework_id)
    {
        // dd($homework_id);
        $pdfpath=AssignedHomeWorkStudent::where('student_id', $student_id)->where('assigned_home_work_id', $homework_id)->get();
        foreach($pdfpath as $pdfpath)
        {
            return $pdfpath->answer->image_path;
        }
        return $pdfpath;
    }
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
}
