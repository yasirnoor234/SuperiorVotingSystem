<?php

namespace App\Model\Teacher;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['title'];
    public function meetingdetails()
    {
        return $this->hasMany('App\Model\Student\MeetingDetail');
    }

}
