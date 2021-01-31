<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getSubjects($id)
    {
        $subjects = Subject::where('class_master_id', $id)->get();
        
        return response()->json($subjects);
    }

    public function getTopics($id)
    {
        $topics = Topic::where('subject_id', $id)->get();
        return response()->json($topics);
    }
}
