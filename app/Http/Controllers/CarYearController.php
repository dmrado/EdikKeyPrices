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
    public function getCarYear($carmod){
        $carYears = Caryear::where("carmod_id", $carmod)
            ->orderBy("caryear")
            ->get();
        return response()->json($carYears);
    }
    public function export()
    {
        return Excel::download(new CarYearExport, 'caryears.xlsx');
    }

    public function import()
    {
        return Excel::import(new CarYearImport, 'caryears.xlsx');
    }

    public function ajaxGetCarYear($id){
        return Caryear::select('caryear', 'caryear_id')
            ->where('carmod_id', '=', $id)
            ->get();
    }
}
