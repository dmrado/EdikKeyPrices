<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sevise;

class ServiceController extends Controller
{
    public function getService(){
        $service_name = Sevise::select("service", "cost")
            ->orderBy("service")
            ->get();
        return response()->json($service_name);
    }

    public function getSharp($keySharp){
        $costSharp = Sevise::select("cost", $keySharp)
            ->get();
        return response()->json( $costSharp);
    }
}
