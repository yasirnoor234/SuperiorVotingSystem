<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['title'];
    public function suggestions()
    {
        return $this->belongsToMany('App\Model\Student\Suggestion');
    }

}
