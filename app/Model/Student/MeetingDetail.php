<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class MeetingDetail extends Model
{
    protected $fillable = ['title','description','purpose','date','time', 'meeting_id'];
    public function meeting()
    {
        return $this->belongsTo('App\Model\Teacher\Meeting');
    }


}
