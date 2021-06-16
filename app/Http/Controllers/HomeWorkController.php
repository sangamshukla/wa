<?php

namespace App\Http\Controllers;

use App\Models\AssignedHomeWork;
use App\Models\AssignedHomeWorkAnswer;
use App\Models\AssignedHomeWorkAnswerMap;
use App\Models\AssignedHomeWorkStudent;
use App\Models\BatchSession;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\ResourceMaster;
use App\Models\TeacherProfile;
use App\Models\User;
use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function startSession($id)
    {
        $session = BatchSession::where('id', $id)->first();
      
        $allSessions = BatchSession::where('batch_id', $session->batch_id)->get();
        // dd($allSessions);
        $listOfSessions = collect([]);
        $allSessions->transform(function ($singleSession) use ($listOfSessions) {
            $batches = OrderItems::with('orderPayment')->where('batch_id', $singleSession->batch_id)->get();
            $studenList = collect([]);
            $batches->transform(function ($batch) use ($studenList) {
                $studenList->push($batch->orderPayment->student_id);
            });
            $singleSession->students =  User::whereIn('id', $studenList->unique())->get();
            $assignedHW = AssignedHomeWork::where('session_id', $singleSession->id)->first();
            $singleSession->hw = $assignedHW;
            $singleSession->submission_count = AssignedHomeWorkAnswer::
            where('assigned_home_work_id', $assignedHW->id ?? null)->where('is_submitted', '1')->count();
            $singleSession->students->transform(function ($student) use ($assignedHW) {
                $student->is_homework_assigned = AssignedHomeWorkAnswer::
                where('assigned_home_work_id', $assignedHW->id ?? null)
                ->where('student_id', $student->id)->where('is_submitted', '1')->exists();
                $submitted = AssignedHomeWorkAnswer::
                where('assigned_home_work_id', $assignedHW->id ?? null)
                ->where('student_id', $student->id)->where('is_submitted', '1')->exists();
                $student->is_submitted = $submitted;
                $student->homeworks = AssignedHomeWorkStudent::
                where('assigned_home_work_id', $assignedHW->id ?? null)
                ->where('student_id', $student->id)->first();
                $student->homeworkId = false;
                if ($submitted) {
                    $student->homeworkId = AssignedHomeWorkAnswer::
                    where('assigned_home_work_id', $assignedHW->id ?? null)
                    ->where('student_id', $student->id)->where('is_submitted', '1')->first()->id;
                }

                return $student;
            });
            
            
            return $singleSession;
        });
        
        // dd($allSessions);
        $studentsList = collect([]);
        $batches = OrderItems::with('orderPayment')->where('batch_id', $session->batch_id)->get();

        $batches->transform(function ($batch) use ($studentsList) {
            $studentsList->push($batch->orderPayment->student_id);
        });
        
        $students = User::whereIn('id', $studentsList->unique())->get();

        $pdfFilesAll = ResourceMaster::where('sub_topic_id', $session->singleTopic->topic_id)
            ->where('is_active', 1)->get();
        $images = TeacherProfile::where('user_id', $id)->select('teacher_profile_photo')->get();
        // dd($pdfFilesAll);
        return view('homework.start-session', compact('allSessions', 'session', 'students', 'pdfFilesAll', 'images'));
    }
    public function saveStartSession(Request $request)
    {
        $session = AssignedHomeWork::Create([
        'comment' => $request->comment,
        'points' => $request->points,
        'subtopic_name' => $request->subtopic_name,
        'pdf_path' => $request->pdf_path,
        ]);
        if ($request->hasFile('pdf_path')) {
            $request->file('pdf_path')->store('uploadimg');
        }
        return view('homework.start-session', compact('session'));
    }

    public function uploadPDF(Request $request, $id)
    {
        $request->validate([
            'pdf' => 'mimes:pdf',
        ]);
        if ($request->hasFile('pdf')) {
            $filename = $request->pdf->getClientOriginalName();
            $path = $request->file('pdf')->store('public/pdfs', ['disk'=>'public_uploads']);
           
            return response()->json(['filename'=>$filename, 'fileId'=>$path]);
        } else {
            return 'please choose file';
        }
    }

    public function assignHomeWork(Request $request)
    {
        $content = json_decode($request->getContent());
        $session = BatchSession::find($content->session_id);

        $checkHomeWorkIsAlreadyAssigned = AssignedHomeWork::where('session_id', $content->session_id)->exists();
        
        // if ($checkHomeWorkIsAlreadyAssigned) {
        //     return response()->json(['data'=> 'Homework is already assigned for this session'], 400);
        // }

        $studentsList = collect([]);
        $batches = OrderItems::with('orderPayment')->where('batch_id', $session->batch_id)->get();

        $batches->transform(function ($batch) use ($studentsList) {
            $studentsList->push($batch->orderPayment->student_id);
        });
        // // if(isset($cont))
        // foreach()
        $students = User::whereIn('id', $content->choosePdfSelectStudent)->get();
        $homeworkContent = $content->assigned_content;

        if ($content->type_of_homework == 'UPLOAD_PDF') {
            $homeworkContent = implode(",", $content->assigned_content);
        }
        if ($content->type_of_homework == 'CHOOSE_PDF') {
            $homeworkContent = $content->assigned_content;
        }
        if ($content->type_of_homework == 'ADD_QUESTION') {
            $homeworkContent = $content->assigned_content;
        }

        $assignedHomework =  AssignedHomeWork::updateOrCreate([
            'session_id' => $content->session_id], [
            'comment' => $content->comment,
            'points' => $content->points,
            'due_date' => $content->due_date ?? '',
            'type_of_homework'=>$content->type_of_homework,
            'assigned_content' => $homeworkContent, // resource_master id
        ]);

        foreach ($students as $student) {
            AssignedHomeWorkStudent::create([
                'assigned_home_work_id' => $assignedHomework->id,
                'student_id' => $student->id,
                'type_of_homework'=>$content->type_of_homework,
                'assigned_content' => $homeworkContent,
            ]);
        }
        return response()->json("Success");
    }

    public function viewhomeworkdetails($id)
    {
        $submittedHomework = AssignedHomeWorkAnswer::find($id);
        $student = AssignedHomeWorkStudent::where('student_id', $submittedHomework->student_id)
            ->where('assigned_home_work_id', $submittedHomework->assigned_home_work_id)->first();
        $homeworkContent = AssignedHomeWorkAnswerMap::where(
            'assigned_home_work_id',
            $submittedHomework->assigned_home_work_id
        )->where('assigned_home_work_student_id', $student->id)->get();
        $multiple  = true;
        // $assignedHomework = AssignedHomeWork::find($submittedHomework->assigned_homework_id);
        // dd($homeworkContent);
        if(count($homeworkContent) <= 1){
             $homeworkContent = AssignedHomeWorkAnswerMap::where(
            'assigned_home_work_id',
            $submittedHomework->assigned_home_work_id
        )->where('assigned_home_work_student_id', $student->id)->first();
           
            
            $multiple = false;
        }
    
        $assignedHomework = AssignedHomeWork::find($submittedHomework->assigned_home_work_id);

        return view('homework._homework_details', compact('submittedHomework', 'homeworkContent', 'assignedHomework', 'student', 'multiple'));
    }

    public function assignPoints(Request $request)
    {
        $content = json_decode($request->getContent());
        AssignedHomeWorkStudent::find($content->id)->update([
            'given_marks' => $content->points
        ]);
        return response()->json("Success");
    }
}
