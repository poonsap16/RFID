<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
        protected $fillable = [
            'sap_id',
            'prefix',
            'name',
            'doctor_cert',
            'section',
            'year',
            'year_study' 
    ];
}
