<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceMaster extends Model
{
    use HasFactory;
    protected $fillable = [
        'pdf_path',
        'sub_topic_id',
    ];
}
