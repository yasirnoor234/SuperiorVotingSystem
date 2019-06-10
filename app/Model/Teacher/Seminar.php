<?php

namespace App\Model\Teacher;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable = ['title'];
    public function seminardetails()
    {
        return $this->hasMany('App\Model\Student\SeminarDetail');
    }

}
