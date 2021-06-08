<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedHomeWorkStudent extends Model
{
    use HasFactory;
    protected $table= "assigned_homework_students";
    protected $guarded = [];

    public function homeWork()
    {
        return $this->belongsTo(AssignedHomeWork::class, 'id');
    }
    public function session()
    {
        return $this->belongsTo(BatchSession::class, 'session_id');
    }
}
