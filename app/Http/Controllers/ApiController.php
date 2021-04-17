<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    /**
     * API For Login Pay Page
     * @param Request $request
     * @return JsonResponse
     * @throws BindingResolutionException
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $login = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($login) {
            return response()->json('success');
        }
        return response()->json('failed');
    }
}
