<?php

namespace App\Exports;

use App\Caryear;
use Maatwebsite\Excel\Concerns\FromCollection;

class CarYearExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Caryear::all();
    }
}
