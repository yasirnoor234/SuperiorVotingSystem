<?php

namespace App\Model\Teacher;

use Illuminate\Database\Eloquent\Model;

class MeetingArrange extends Model
{
    protected $fillable = ['meeting_title','meeting_purpose','date','time'];

}
