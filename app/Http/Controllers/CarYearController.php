<?php

namespace App\Http\Controllers;
//use App\Carbrand;
use App\Carmod;
use App\Caryear;
//use App\Key;
//
//use Illuminate\Http\Request;

class CarYearController extends Controller
{
    public function getCarYear(Carmod $carmod){
        $caryear = Caryear::select("caryear")
            ->where("carmod", $carmod->carmod_id)
            ->orderBy("caryear")->get();
        return view("vendors.main", ["caryear" => $caryear]);
    }
}
