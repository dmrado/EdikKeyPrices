<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carmod;

class CarController extends Controller
{
    public function getcarmod($carbrand_id){
        $carmods = Carmod::where ("carbrand_id", "=", $carbrand_id)
            ->orderBy("carmod_name")->get();
        return response()->json(["check" => true]);
    }
}