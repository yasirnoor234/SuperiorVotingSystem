<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $fillable = ['suggestion'];
    public function feedbacks()
    {
        return $this->belongsToMany('App\Model\Student\Feedback');
    }

}
