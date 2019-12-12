<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Timesheet;
use Illuminate\Support\Facades\Validator;

class TeacherdatasImport implements ToCollection, WithHeadingRow
{
    use Importable;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        \Log::info($collection);
        \Log::info($collection->toArray());
        Validator::make($collection->toArray(),[
 	        '*.empid' => 'required',
	        '*.emprankname' => 'required',
	        '*.empname' => 'required',
	        '*.empsname' => 'required',
	        '*.empflag' => 'required',
	        '*.empcardid' => 'required',
	        '*.positiontype' => 'required',
	        '*.section' => 'required'
        ])->validate();

        foreach($collection as $row)
        {
            Timesheet::create([

            	'empid' => $row['empid'],
	            'emprankname' => $row['emprankname'],
	            'empname' => $row['empname'],
	            'empsname' => $row['empsname'],
	          	'empflag' => $row['empflag'],
	          	'empcardid' => $row['empcardid'],
	            'positiontype' => $row['positiontype'],
	            'section' => $row['section']
            ]);
        }
    }

    public function headingRow(): int
    {
    	return 3;
	}
}