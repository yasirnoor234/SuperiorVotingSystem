<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classy extends Model
{
    protected $fillable = ['department_id','class_name','status'];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function candidate()
    {
        return $this->hasMany(Candidate::class);
    }
    public function poll()
    {
        return $this->hasMany(Poll::class);
    }

}
