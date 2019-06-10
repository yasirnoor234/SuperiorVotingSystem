<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = ['student_id','class_id','status'];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
