<?php

namespace App\Model\Student;

use Illuminate\Database\Eloquent\Model;

class SeminarDetail extends Model
{
    protected $fillable = ['title','description','type','date','time', 'seminar_id'];
    public function seminar()
    {
        return $this->belongsTo('App\Model\Teacher\Seminar');
    }


}
