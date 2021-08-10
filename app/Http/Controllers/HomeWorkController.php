<?php

namespace App\Http\Controllers;

use App\Models\AssignedHomeWork;
use App\Models\AssignedHomeWorkAnswer;
use App\Models\AssignedHomeWorkAnswerMap;
use App\Models\AssignedHomeWorkStudent;
use App\Models\BatchSession;
<<<<<<< HEAD
use App\Models\Batch;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\OrderPayment;
=======
use App\Models\Order;
use App\Models\OrderItems;
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
use App\Models\ResourceMaster;
use App\Models\TeacherProfile;
use App\Models\User;
use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function startSession($id)
    {
        $session = BatchSession::where('id', $id)->first();
<<<<<<< HEAD
      
=======

>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
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
<<<<<<< HEAD
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
=======
            $singleSession->submission_count = AssignedHomeWorkAnswer::where('assigned_home_work_id', $assignedHW->id ?? null)->where('is_submitted', '1')->count();
            $singleSession->students->transform(function ($student) use ($assignedHW) {
                $student->is_homework_assigned = AssignedHomeWorkAnswer::where('assigned_home_work_id', $assignedHW->id ?? null)
                    ->where('student_id', $student->id)->where('is_submitted', '1')->exists();
                $submitted = AssignedHomeWorkAnswer::where('assigned_home_work_id', $assignedHW->id ?? null)
                    ->where('student_id', $student->id)->where('is_submitted', '1')->exists();
                $student->is_submitted = $submitted;
                $student->homeworks = AssignedHomeWorkStudent::where('assigned_home_work_id', $assignedHW->id ?? null)
                    ->where('student_id', $student->id)->first();
                $student->homeworkId = false;
                if ($submitted) {
                    $student->homeworkId = AssignedHomeWorkAnswer::where('assigned_home_work_id', $assignedHW->id ?? null)
                        ->where('student_id', $student->id)->where('is_submitted', '1')->first()->id;
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
                }

                return $student;
            });
<<<<<<< HEAD
            
            
            return $singleSession;
        });
        
=======


            return $singleSession;
        });

>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        // dd($allSessions);
        $studentsList = collect([]);
        $batches = OrderItems::with('orderPayment')->where('batch_id', $session->batch_id)->get();

        $batches->transform(function ($batch) use ($studentsList) {
            $studentsList->push($batch->orderPayment->student_id);
        });
<<<<<<< HEAD
        
=======

>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        $students = User::whereIn('id', $studentsList->unique())->get();

        $pdfFilesAll = ResourceMaster::where('sub_topic_id', $session->singleTopic->topic_id)
            ->where('is_active', 1)->get();
        $images = TeacherProfile::where('user_id', $id)->select('teacher_profile_photo')->get();
        // dd($pdfFilesAll);
<<<<<<< HEAD
        $homework_id=AssignedHomeWork::where('session_id', $id)->get();
        foreach($homework_id as $homework_id)
        {
          $homework_id=$homework_id->id;
        }
        $assigned_homeworks=$this->getHomeWork($homework_id);
        return view('homework.start-session', compact('allSessions', 'assigned_homeworks' ,'session', 'students', 'pdfFilesAll', 'images'));
=======
        return view('homework.start-session', compact('allSessions', 'session', 'students', 'pdfFilesAll', 'images'));
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
    }
    public function saveStartSession(Request $request)
    {
        $session = AssignedHomeWork::Create([
<<<<<<< HEAD
        'comment' => $request->comment,
        'points' => $request->points,
        'subtopic_name' => $request->subtopic_name,
        'pdf_path' => $request->pdf_path,
=======
            'comment' => $request->comment,
            'points' => $request->points,
            'subtopic_name' => $request->subtopic_name,
            'pdf_path' => $request->pdf_path,
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
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
<<<<<<< HEAD
            $path = $request->file('pdf')->store('public/pdfs', ['disk'=>'public_uploads']);
           
            return response()->json(['filename'=>$filename, 'fileId'=>$path]);
=======
            $path = $request->file('pdf')->store('public/pdfs', ['disk' => 'public_uploads']);

            return response()->json(['filename' => $filename, 'fileId' => $path]);
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        } else {
            return 'please choose file';
        }
    }

    public function assignHomeWork(Request $request)
    {
        $content = json_decode($request->getContent());
        $session = BatchSession::find($content->session_id);

        $checkHomeWorkIsAlreadyAssigned = AssignedHomeWork::where('session_id', $content->session_id)->exists();
<<<<<<< HEAD
        
=======

>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
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
<<<<<<< HEAD
            'session_id' => $content->session_id], [
            'comment' => $content->comment,
            'points' => $content->points,
            'due_date' => $content->due_date ?? '',
            'type_of_homework'=>$content->type_of_homework,
=======
            'session_id' => $content->session_id
        ], [
            'comment' => $content->comment,
            'points' => $content->points,
            'due_date' => $content->due_date ?? '',
            'type_of_homework' => $content->type_of_homework,
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
            'assigned_content' => $homeworkContent, // resource_master id
        ]);

        foreach ($students as $student) {
            AssignedHomeWorkStudent::create([
                'assigned_home_work_id' => $assignedHomework->id,
                'student_id' => $student->id,
<<<<<<< HEAD
                'type_of_homework'=>$content->type_of_homework,
=======
                'type_of_homework' => $content->type_of_homework,
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
                'assigned_content' => $homeworkContent,
            ]);
        }
        return response()->json("Success");
    }

    public function viewhomeworkdetails($id)
    {
<<<<<<< HEAD
       $submittedHomework = AssignedHomeWorkAnswer::find($id);
=======
        $submittedHomework = AssignedHomeWorkAnswer::find($id);
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        $student = AssignedHomeWorkStudent::where('student_id', $submittedHomework->student_id)
            ->where('assigned_home_work_id', $submittedHomework->assigned_home_work_id)->first();
        $homeworkContent = AssignedHomeWorkAnswerMap::where(
            'assigned_home_work_id',
            $submittedHomework->assigned_home_work_id
        )->where('assigned_home_work_student_id', $student->id)->get();
        $multiple  = true;
        // $assignedHomework = AssignedHomeWork::find($submittedHomework->assigned_homework_id);
        // dd($homeworkContent);
        if (count($homeworkContent) <= 1) {
            $homeworkContent = AssignedHomeWorkAnswerMap::where(
                'assigned_home_work_id',
                $submittedHomework->assigned_home_work_id
            )->where('assigned_home_work_student_id', $student->id)->first();


            $multiple = false;
        }

        $assignedHomework = AssignedHomeWork::find($submittedHomework->assigned_home_work_id);
<<<<<<< HEAD
=======
        // dd($homeworkContent);
        // dd($student);
        // dd($submittedHomework);
        // dd($multiple);
        // dd($assignedHomework);
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
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
<<<<<<< HEAD
    
    public function makeMarkSheet($studentId)
    {
        $getYear1Students = User::with('student')->whereIn('id', [$studentId])->get();
        $getYear1Students->transform(function ($student) {
            $student->maths_marks = $this->getMathsMarks($student->id);
            $student->english_marks = $this->getEnglishMarks($student->id);
            $student->essay_marks = $this->getEssayMarks($student->id);

            $student->obtd_marks = $student->maths_marks[1] + $student->english_marks[1] +  $student->essay_marks[1];
            $student->maths_marks_total = $student->maths_marks[0];
            $student->english_marks_total = $student->english_marks[0];
            $student->essay_marks_total = $student->essay_marks[0];
            $student->total_marks = $student->maths_marks[0] + $student->english_marks[0] +  $student->essay_marks[0];
            $student->percentage =  ($student->obtd_marks / ($student->total_marks == 0 ? 1 : $student->total_marks)) * 100;
            return $student;
        });
        $assignedhomeworks = $getYear1Students->sortByDesc('percentage');

        $batches = Batch::all();
        return view('ajax.mark_sheet', compact('assignedhomeworks', 'batches'));
    }

    public function marksSheet()
    {
        $getYear1Students = User::with('student')->where('role', 'student')->latest()->paginate(20);
        
        $getYear1Students->transform(function ($student) {
            $student->maths_marks = $this->getMathsMarks($student->id);
            $student->english_marks = $this->getEnglishMarks($student->id);
            $student->essay_marks = $this->getEssayMarks($student->id);

            $student->obtd_marks = $student->maths_marks[1] + $student->english_marks[1] +  $student->essay_marks[1];
            $student->maths_marks_total = $student->maths_marks[0];
            $student->english_marks_total = $student->english_marks[0];
            $student->essay_marks_total = $student->essay_marks[0];
            $student->total_marks = $student->maths_marks[0] + $student->english_marks[0] +  $student->essay_marks[0];
            $student->percentage = ($student->obtd_marks / ($student->total_marks == 0 ? 1 : $student->total_marks)) * 100;
            return $student;
        });
        $assignedhomeworks = $getYear1Students->sortByDesc('percentage');

        $batches = Batch::all();
        return view('homework.marks-sheet', compact('assignedhomeworks', 'batches', 'getYear1Students'));
    }
    public function getMathsMarks($studentId)
    {
        // maths id = 2
        $mathsBatches = Batch::where('subject_id', 2)->latest()->get();
        $m = $mathsBatches->filter(function ($batch) use ($studentId) {
            $a = false;
            foreach ($batch->batchSession as $session) {
                $assignedHomeworks =  AssignedHomeWork::where('session_id', $session->id)->get();
                foreach ($assignedHomeworks as $ah) {
                    if ($ah->studentlist()->where('student_id', $studentId)->exists()) {
                        $a = true;
                    }
                }
            }
            return $a;
        });
        foreach ($m->all() as $maths) {
            foreach ($maths->batchSession as $session) {
                $assignedHomeworks =  AssignedHomeWork::where('session_id', $session->id)->get();
                foreach ($assignedHomeworks as $ah) {
                    if ($ah->studentlist()->where('student_id', $studentId)->exists()) {
                        $assignedHw = $ah->studentlist()->where('student_id', $studentId)->first();
                        return [$ah->points,$assignedHw->given_marks];
                    }
                }
            }
        }
        return [0,0];
    }
    public function getEnglishMarks($studentId)
    {
        // english subject_id =2
        $englishBatches = Batch::where('subject_id', 1)->latest()->get();
        $m = $englishBatches->filter(function ($batch) use ($studentId) {
            $a = false;
            foreach ($batch->batchSession as $session) {
                $assignedHomeworks =  AssignedHomeWork::where('session_id', $session->id)->get();
                foreach ($assignedHomeworks as $ah) {
                    if ($ah->studentlist()->where('student_id', $studentId)->exists()) {
                        $a = true;
                    }
                }
            }
            return $a;
        });
        foreach ($m->all() as $english) {
            foreach ($english->batchSession as $session) {
                $assignedHomeworks =  AssignedHomeWork::where('session_id', $session->id)->get();
                foreach ($assignedHomeworks as $ah) {
                    if ($ah->studentlist()->where('student_id', $studentId)->exists()) {
                        $assignedHw = $ah->studentlist()->where('student_id', $studentId)->first();
                        return [$ah->points,$assignedHw->given_marks];
                    }
                }
            }
        }
        return [0,0];
    }
    public function getEssayMarks($studentId)
    {
        // essay subject _id = 3
        $essayBatches = Batch::where('subject_id', 3)->latest()->get();
        $m = $essayBatches->filter(function ($batch) use ($studentId) {
            $a = false;
            foreach ($batch->batchSession as $session) {
                $assignedHomeworks =  AssignedHomeWork::where('session_id', $session->id)->get();
                foreach ($assignedHomeworks as $ah) {
                    if ($ah->studentlist()->where('student_id', $studentId)->exists()) {
                        $a = true;
                    }
                }
            }
            return $a;
        });
        foreach ($m->all() as $essay) {
            foreach ($essay->batchSession as $session) {
                $assignedHomeworks =  AssignedHomeWork::where('session_id', $session->id)->get();
                foreach ($assignedHomeworks as $ah) {
                    if ($ah->studentlist()->where('student_id', $studentId)->exists()) {
                        $assignedHw = $ah->studentlist()->where('student_id', $studentId)->first();
                        return [$ah->points,$assignedHw->given_marks];
                    }
                }
            }
        }
        return [0,0];
    }
    
     public function payDueAmount(Request $request)
    {
        $payment_amount=$request->payment_amount;
        $order_id=$request->order_id;
        $update_due=OrderPayment::updateOrCreate(
        [
            'id'=>$order_id
        ],
        [
            'paid_amount'=>$payment_amount
        ]);
        if($update_due)
        {
            return response($update_due);
            return response('payment updated successfully')->with('msg', 'Payment has been updated. ');
        }
        else
        {
            return response('there is some error');
        }
    }
    public function is_homework_assigned()
    {
        dd("I got to this method");
    }
    public function check()
    {
        $this->is_homework_assigned();
    }
     public static function getHomeWork($homework_id)
    {
      $assigned_homeworks=AssignedHomeWorkStudent::where('assigned_home_work_id', $homework_id)->get();
      return $assigned_homeworks;
    }
        public function upload_edit_homework(Request $request)
    {

      $homeworks_to_be_edited=AssignedHomeWorkStudent::where('assigned_home_work_id', $request->homework_id)->where('student_id', $request->student_id)->get();
      if($request->hasFile('homework_file'))
      {
        foreach($homeworks_to_be_edited as $homework_to_be_edited)
        {
          $success=$request->file('homework_file')->store('public/pdfs', ['disk'=>'public_uploads']);
          if($success)
          {
            $homework_to_be_edited->assigned_content=$success;
            $updated_database=$homework_to_be_edited->save();
            if($updated_database)
            {
              return back()->with('msg', 'homework has been uploaded');
            }
          }

        }
      }
      else
      {
        return back()->with('msg','please choose file');
      }
    }
    public function delete_homework($homework_id, $student_id)
    {
      $homeworks_to_be_deleted=AssignedHomeWorkStudent::where('assigned_home_work_id', $homework_id)->where('student_id', $student_id)->get();
      foreach($homeworks_to_be_deleted as $homework_to_be_deleted)
      {
        $deleted=$homework_to_be_deleted->delete();
        if($deleted)
        {
          return back()->with('msg', 'Homework has been been deleted');
        }
      }
    }
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
}
