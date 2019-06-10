<?php

namespace App\Model\Teacher;

use Illuminate\Database\Eloquent\Model;

class EventCreate extends Model
{
    protected $fillable = ['event_title','event_description','event_type','date','time'];
}
