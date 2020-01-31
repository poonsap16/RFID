<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Timesheet;
use App\CalendarTimeSheet;
use Illuminate\Support\Facades\Validator;


class TimesheetsImport implements ToCollection, WithHeadingRow
{
    use Importable;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        \Log::info(request()->all());
        // \Log::info($collection);
        // \Log::info($collection->toArray());
        Validator::make($collection->toArray(),[
            '*.rfid_no' => 'required',
            '*.sap_id' => 'required',
            '*.date_stamp' => 'required',
            '*.time_stamp' => 'required',
            '*.rfid_position' => 'required',
            '*.rfid_status' => 'required',
            '*.rfid_door' => 'required'
        ])->validate();

        foreach($collection as $row)
        {
            $timesheet = Timesheet::create([
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

            if (count($timesheet->calendars) !== 0)
            {
                foreach($timesheet->calendars as $calendar)
                {
                    if ($calendar->id == request()->input('calendarId'))
                    {
                        $calendarTimesheet = CalendarTimesheet::where('calendar_id', $calendar->id)
                                                ->where('sap_id', $timesheet->sap_id)
                                                ->first();
                        if (!$calendarTimesheet)
                            CalendarTimesheet::create([
                            'calendar_id' => $calendar->id,
                            'sap_id' => $timesheet->sap_id,
                            // 'time_stamp' => $timesheet->time_stamp
                            ]);
                    }
                }
                
            }

        }
    }

    public function headingRow(): int
    {
    	return 3;
	}
}
