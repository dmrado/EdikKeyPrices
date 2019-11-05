<?php

namespace App\Http\Controllers;
use App\Carbrand;
use App\Carmod;
use App\Caryear;
use App\Key;
use Illuminate\Http\Request;

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

    public function ajaxGetKey($id){// caryear_id вызывает подходящие карточки ключей
        return Key::select('keyName', 'keySubscr', 'keyPict', 'keyPrice', 'type')
            ->where('caryear_id', '=', $id)
            ->get();
    }
}