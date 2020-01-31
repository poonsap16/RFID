<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = [
        'date',
        'task_id',
        'start_time',
        'end_time',
        'before_time',
        'after_time',
        'late_time',
        'color'
    ];

    public function task() {
        return $this->belongsTo(Task::class);
    }

    public function calendarTimesheet () {
        return $this->hasMany(CalendarTimesheet::class);
    }
}
