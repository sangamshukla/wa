<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\ClassMaster;
use App\Models\ClassSettings;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Carbon\Carbon;
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

        $batches = Batch::all();
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
        return view('class.create', compact('classes', 'subjects', 'assignteachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $batch = Batch::Create([
            'name'=>$request->name,
            'batch_price_per_session'=>$request->batch_price_per_session,
            'batch_start_date'=>$request->batch_start_date,
            'subject_id'=>$request->subject_id,
            'class_master_id'=>$request->class_master_id,
            'created_by' => auth()->user()->id
        ]);
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
