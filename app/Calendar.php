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
        'color'
    ];

    public function task(){
        return $this->belongsTo(Task::class);

    }
}
