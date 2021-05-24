<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedHomeWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'session_id',
        'comment',
        'points',
        'type_of_homework',
        'assigned_content'
    ];
}
