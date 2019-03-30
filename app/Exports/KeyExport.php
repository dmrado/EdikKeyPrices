<?php

namespace App\Exports;

use App\Key;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Key::all();
    }
}
