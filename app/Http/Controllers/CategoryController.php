<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('vendors.main');
    }


    public function keys(){
        $this->parentView = "layouts.agency";
        return view('keys');
    }

    public function serv(){
        $this->parentView = "layouts.agency";
        return view('serv');
    }

//   public function form()
//   {
//       return view('vendors.form');
//   }
}
