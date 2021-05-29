<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedHomeWork extends Model
{
    const UPLOAD_PDF="UPLOAD_PDF";
    const CHOOSE_PDF="CHOOSE_PDF";
    const ADD_QUESTION="ADD_QUESTION";

    use HasFactory;
    protected $fillable = [
        'session_id',
        'comment',
        'points',
        'type_of_homework',
        'assigned_content',
        'due_date',
        'editor_add_question'
    ];
}
