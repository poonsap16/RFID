<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rfid_machine extends Model
{
    protected $fillable = [
            'machine_name',
            'location',
            'building',
            'floor'
    ];
}
