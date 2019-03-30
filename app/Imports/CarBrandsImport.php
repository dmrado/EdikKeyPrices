<?php

namespace App\Imports;

use App\CarBrand;
use Maatwebsite\Excel\Concerns\ToModel;

class CarBrandsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CarBrand([
            'carbrand_id' => $row[0],
            'carbrand_name' => $row[1]
        ]);
    }
}
