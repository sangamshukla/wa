<?php

namespace App\Http\Controllers;

use App\Models\AssignedHomeWork;
use App\Models\BatchSession;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\User;
use Illuminate\Http\Request;

class HomeWorkController extends Controller
{
    public function startSession($id)
    {
        $session = BatchSession::find($id);
        $studentsList = collect([]);
        $batches = OrderItems::with('orderPayment')->where('batch_id', $session->batch_id)->get();

        $batches->transform(function ($batch) use ($studentsList) {
            $studentsList->push($batch->orderPayment->student_id);
        });
        
        $students = User::whereIn('id', $studentsList->unique())->get();

        // $pdfFilesAll =

        return view('homework.start-session', compact('session', 'students'));
    }
    public function saveStartSession(Request $request)
    {
        $session = AssignedHomeWork::Create([
        'comment' => $request->comment,
        'points' => $request->points,
        'subtopic_name' => $request->subtopic_name,
        ]);
    }
}
