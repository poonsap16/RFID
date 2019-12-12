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
}
