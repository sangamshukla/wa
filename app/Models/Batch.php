<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Batch extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function classmaster()
    {
        return $this->belongsTo(ClassMaster::class, 'class_master_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function classSettings()
    {
        return $this->belongsTo(ClassSettings::class, 'class_settings_id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    public function assignteacher()
    {
        return $this->belongsTo(User::class, 'name');
    }
}
