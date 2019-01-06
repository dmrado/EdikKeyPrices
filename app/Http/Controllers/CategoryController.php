<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $this->parentView = "layouts.agency";
        return view('keys');
    }
    public function form(){//возвращает HTML строку
        $this->parentView = "layouts.agency";
        return view('form');
    }

//    public function keys(){
//        $this->parentView = "layouts.agency";
//        return view('keys');
//    }

}
