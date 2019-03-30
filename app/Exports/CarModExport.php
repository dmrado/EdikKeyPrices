<?php

namespace App\Exports;

use App\Carmod;
use Maatwebsite\Excel\Concerns\FromCollection;

class CarModExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Carmod::all();
    }
}
