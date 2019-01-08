<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Carbrand;

class CategoryController extends Controller
{
    public function index(){
        $this->parentView = "layouts.agency";
        return view('keys');
    }
    public function form(){//возвращает HTML строку
        $this->parentView = "layouts.agency";
        $carBrands = Carbrand::all();

        return view('form', compact('carBrands'));
    }

//    public function keys(){
//        $this->parentView = "layouts.agency";
//        return view('keys');
//    }

}
