<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSessionMap extends Model
{
    use HasFactory;
    protected $fillable = [
        'batch_id',
        'session_id',
        'order_id'
    ];
}
