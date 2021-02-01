<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\BatchSession;
use App\Models\BatchTopic;
use App\Models\ClassMaster;
use App\Models\ClassSettings;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Carbon\Carbon;
use Database\Seeders\ClassSettings as SeedersClassSettings;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totals = Batch::count();
        $totalprice = Batch::count();

        $batches = Batch::latest()->get();
        return view('class.index', compact('batches', 'totals', 'totalprice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assignteachers = User::all();
        $classes = ClassMaster::all();
        $subjects = Subject::all();
        $classsettings = ClassSettings::all();
        return view('class.create', compact('classes', 'subjects', 'assignteachers', 'classsettings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);
        if ($request->class_settings != '') {
            $classSettings = ClassSettings::updateOrCreate(['name' => $request->class_settings]);
            $class = $classSettings->id;
        } else {
            $class = $request->class_settings_id;
        }
        $batch = Batch::Create([
            'name'=>$request->name,
            'batch_price_per_session'=>$request->batch_price_per_session,
            'batch_start_date'=>$request->batch_start_date,
            'subject_id'=>$request->subject_id,
            'class_master_id'=>$request->class_master_id,
            'class_settings_id'=>$class,
            'duration_per_session'=>$request->duration_per_sessions_id,
            'teacher_available_status'=>$request->teacher_available_status,
            'created_by' => auth()->user()->id
        ]);
        $index = 1;
        foreach ($request->session_name as $session_name) {
            $d = $request->date_time_session[$index][0];
            $comment = $request->comment[$index][0];
            $batchSession = BatchSession::create([
                'batch_id' => $batch->id,
                'name' => $session_name[0],
                'start_date_time' => $d,
                'comment' => $comment
            ]);
            $topicx = 'topic_'.$index;
            foreach ($request->{$topicx} as $t) {
                BatchTopic::create([
                    'batch_session_id' => $batchSession->id,
                    'topic_id' => $t
                ]);
            }
            $index++;
        }

        return redirect(route('manage-class'))->with('status', 'Class Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batch  $batch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        //
    }
}
