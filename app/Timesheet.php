<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
            protected $fillable = [
	            'no',
	            'rfid_no',
	            'sap_id',
	            'name',
	          	'date_stamp',
	          	'time_stamp',
	            'rfid_position',
	            'rfid_status',
	            'rfid_door'
    ];
}
