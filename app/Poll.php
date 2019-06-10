<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['candidate_id','student_id','classies_id'];
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function classy()
    {
        return $this->belongsTo(Classy::class);
    }
}
