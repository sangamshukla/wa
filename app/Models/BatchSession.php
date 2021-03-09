<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchSession extends Model
{
    use HasFactory;
    protected $table = 'batch_session';
    protected $guarded=[];

    protected $casts  = [
        'start_date_time' => 'datetime'
    ];

    public function topics()
    {
        return  $this->hasMany(BatchTopic::class, 'batch_session_id');
    }
}
