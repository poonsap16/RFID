<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Timesheet;
use Illuminate\Support\Facades\Validator;

class TimesheetsImport implements ToCollection, WithHeadingRow
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
            '*sap_id' => 'required'
        ])->validate();

        foreach($collection as $row)
        {
            Timesheet::create([
                'no' => $row['no'],
                'rfid_no' => $row['rfid_no'],
                'sap_id' => $row['sap_id'],
                'name' => $row['name'],
                'date_stamp' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_stamp']),
                'time_stamp' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['time_stamp']),
                'rfid_position' => $row['rfid_position'],
                'rfid_status' => $row['rfid_status'],
                'rfid_door' => $row['rfid_door']
            ]);
        }
    }
    public function headingRow(): int
    {
    	return 3;
	}
}
