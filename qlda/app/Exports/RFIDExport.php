<?php

namespace App\Exports;

use App\Models\RFID;
use Maatwebsite\Excel\Concerns\FromCollection;

class RFIDExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RFID::all();
    }
}
