<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarTimeSheet extends Model
{
    protected $fillable = [
        'calendar_id',
        'sap_id',
        // 'time_sheet'
    ];

    public function calendar () {
        return $this->belongsTo(Calendar::class, 'calendar_id', 'id');
    }

    public function teacher () {

    }

    public function student () {

    }
}
