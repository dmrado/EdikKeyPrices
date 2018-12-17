<?php

namespace App\Http\Controllers;

use App\Carbrand;
use App\Carmod;
use App\Caryear;
use App\Key;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class CarBrandController extends EloquentUserProvider
{
    public function getCarBrand(){
            $carbrand_name = Carbrand::select("carbrand_name")->get();//берет отсюда
            return view("vendors.form", ["carBrands" => $carbrand_name]);//запускает шаблонизатор и вставляет сюда массив $carbrand_name
        }
}
