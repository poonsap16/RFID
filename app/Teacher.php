<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
        protected $fillable = [
	            'empid',
	            'emprankname',
	            'empname',
	            'empsname',
	          	'empflag',
	          	'empcardid',
	            'positiontype',
	            'section'
    ];

    public function scopeTeacherAll($query){
        $query->select(
                '*'
            )->orderBy('id', 'asc');
    }

    public function getTeacherFullname ()
    {
    	return $this->emprankname . $this->empname . '&nbsp;&nbsp;' . $this->empsname;
    }
}
