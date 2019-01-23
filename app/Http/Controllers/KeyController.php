<?php

namespace App\Http\Controllers;
use App\Carbrand;
use App\Carmod;
use App\Caryear;
use App\Key;
use Illuminate\Http\Request;

class KeyController extends Controller
{
//здесь нужно принять из ajax запроса из form id="carSelect" массив из трех значений и по ним select urlы картинок вытащить
// пусть цена лежит в keyName
// для popoverа текст лежит в keySubscr
// urlы лежат в keyPict

    public function getKey($carKey){
        $imgKey = Key::where("caryear_id", $carKey)->get();
        return response()->json( $imgKey);
        //return view("vendors.main", ["keyDat" => $imgKey]);
    }
}