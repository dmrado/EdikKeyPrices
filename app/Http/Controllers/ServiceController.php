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
        return view("form", ["serv" => $service_name]);
    }
}
