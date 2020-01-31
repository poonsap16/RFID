<?php

namespace App;
use Illuminate\Support\Facades\DB;

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
	
	public function calendars () {
		return $this->hasMany(Calendar::class, 'date', 'date_stamp')
					->where(DB::raw('TIMEDIFF(start_time, before_time)'), '<=', $this->time_stamp)
					->where(
						request()->has('doNotBeLate') ? 
							DB::raw('ADDTIME(start_time, late_time)') : 
							DB::raw('ADDTIME(end_time, after_time)'), 
							'>=', $this->time_stamp
						);
	}
}
