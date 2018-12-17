<?php

namespace App\Http\Controllers;
use App\Carbrand;
use App\Carmod;
use App\Caryear;
use App\Key;
use Illuminate\Http\Request;

class KeyController extends Controller
{

    public function getKey(Caryear $caryear){
        $key = Key::select("keyName", "keySubscr", "keyPict")
            ->where("caryear", $caryear->caryear_id)
            ->orderBy("keyName")->get();
        return view("vendors.main", ["keyName" => $key]);
    }
}