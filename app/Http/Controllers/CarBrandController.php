<?php

namespace App\Http\Controllers;
use App\Exports\CarBrandsExport;
use App\Imports\CarBrandsImport;
use Maatwebsite\Excel\Facades\Excel;

use App\Carbrand;
//use App\Carmod;
//use App\Caryear;
//use App\Key;
//
//use Illuminate\Auth\EloquentUserProvider;
//use Illuminate\Http\Request;
////use Illuminate\Support\Facades\DB;

class CarBrandController extends Controller
{
    public function getCarBrand(){
            $carbrand_name = Carbrand::select("carbrand_name")->get();//берет отсюда
            return view("form", ["carBrands" => $carbrand_name]);//запускает шаблонизатор и вставляет сюда массив $carBrands
        }

    public function export()
    {
        return Excel::download(new CarBrandsExport, 'carbrands.xlsx');
    }

    public function import()
    {
        return Excel::import(new CarBrandsImport, '../../../carbrands.xlsx');
    }

    public function ajaxGetCarBrand(){
        return Carbrand::select("carbrand_name", "carbrand_id")->get();
    }
}
