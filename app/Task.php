<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
            'task_name',
            'task_Acronym',
            'start_time',
            'end_time',
            'before_time',
            'after_time',
            'late_time',
            'job_id',
            'job_type',
            'person_type',
            'rfid_location',
            'work_hour'
    ];
}
