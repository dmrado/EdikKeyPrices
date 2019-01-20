<?php

namespace App\Http\Controllers;
use App\Carbrand;
use App\Carmod;
//use App\Caryear;
//use App\Key;
//
//use Illuminate\Http\Request;

class CarModController extends Controller
{
    public function getCarMod($carbrand_id){
        $carmods = Carmod::where ("carbrand_id", "=", $carbrand_id)
            ->orderBy("carmod_name")
            ->get();
        return response()->json($carmods);
    }
}
