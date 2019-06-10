<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class EventDetail extends Model
{
    protected $fillable = ['title','description','type','date','time', 'event_id'];
    public function event()
    {
        return $this->belongsTo('App\Model\Teacher\Event');
    }

}
