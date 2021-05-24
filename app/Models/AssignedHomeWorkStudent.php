<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedHomeWorkStudent extends Model
{
    use HasFactory;
    protected $fillable = [
        'assigned_homework_id',
        'student_id'
    ];
}
