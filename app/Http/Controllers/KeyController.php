<?php

namespace App\Http\Controllers;
use App\Carbrand;
use App\Carmod;
use App\Caryear;
use App\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeyController extends Controller
{

    public function getKey($carKey){
        $imgKey = Key::where("caryear_id", $carKey)->get();
        return response()->json($imgKey);
    }

    public function export()
    {
        return Excel::download(new KeyExport, 'keys.xlsx');
    }

    public function import()
    {
        return Excel::import(new KeyImport, 'keys.xlsx');
    }

    public function ajaxGetKey($caryear){// caryear вызывает подходящие карточки ключей
        return DB::table('keys')->join('caryears', 'caryears.caryear_id', '=', 'keys.caryear_id')
            ->where('caryears.caryear_start', '<=', $caryear)
            ->where('caryears.caryear_finish', '>=', $caryear)
            ->select('keys.caryear_id', 'keys.keyName', 'keys.keySubscr', 'keys.keyPict', 'keys.keyPrice', 'keys.type')
            ->get();
        //второй вариант написания (keys.*) - все поля keys
    }
}