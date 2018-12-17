<?php

namespace App\Http\Controllers;
use App\Carbrand;
use App\Carmod;
use App\Caryear;
use App\Key;

use Illuminate\Http\Request;

class CarModController extends Controller
{
    public function getCarMod(Carbrand $carbrand){
        $carmod_name = Carmod::select("carmod_name")
            ->where("carbrand", $carbrand->carbrand_id)
            ->orderBy("carmod_name")->get();
        return view("vendors.main", ["carmod_name" => $carmod_name]);
    }
}
