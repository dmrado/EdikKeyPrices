<?php

namespace App\Imports;

use App\Caryear;
use Maatwebsite\Excel\Concerns\ToModel;

class CarYearImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Caryear([
            'caryear_id' => $row[0],
            'caryear' => $row[1]
        ]);
    }
}
