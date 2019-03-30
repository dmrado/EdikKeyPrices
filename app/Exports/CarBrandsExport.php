<?php

namespace App\Exports;

use App\CarBrand;
use Maatwebsite\Excel\Concerns\FromCollection;

class CarBrandsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CarBrand::all();
    }
}