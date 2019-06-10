<?php

namespace App\Model\Teacher;

use Illuminate\Database\Eloquent\Model;

class SeminarCreate extends Model
{
    protected $fillable = ['seminar_title','seminar_description','seminar_type','date','time'];

}
