<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Student;
use Illuminate\Support\Facades\Validator;

class StudentdatasImport implements ToCollection, WithHeadingRow
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
            '*.sap_id' => 'required',
            '*.prefix' => 'required', 
            '*.name' => 'required',
            '*.doctor_cert' => 'required',
            '*.section' => 'required',
            '*.year' => 'required',
            '*.year_study' => 'required'
        ])->validate();

        foreach($collection as $row)
        {
            Student::create([

            	'sap_id' => $row['sap_id'],
	            'prefix' => $row['prefix'],
	            'name' => $row['name'],
	            'doctor_cert' => $row['doctor_cert'],
	          	'section' => $row['section'],
	          	'year' => $row['year'],
	            'year_study' => $row['year_study']
            ]);
        }
    }

    public function headingRow(): int
    {
    	return 1;
	}
}
