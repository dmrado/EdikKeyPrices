<?php

namespace App\Imports;

use App\Key;
use Maatwebsite\Excel\Concerns\ToModel;

class KeyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Key([
            'keyName' => $row[0],
            'keySubscr' => $row[1],
            'keyPict' => $row[2]
        ]);
    }
}
