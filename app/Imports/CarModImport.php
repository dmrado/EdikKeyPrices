<?php

namespace App\Imports;

use App\Carmod;
use Maatwebsite\Excel\Concerns\ToModel;

class CarModImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Carmod([
            'carmod_id' => $row[0],
            'carmod_name' => $row[1]
        ]);
    }
}
