<?php

namespace App\Model\Teacher;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title'];
    public function eventdetails()
    {
        return $this->hasMany('App\Model\Student\EventDetail');
    }

}
