<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller//а зачем он здесь?
{
    public function index(){
        return view('vendors.main');
    }

   public function form()
   {
       return view('vendors.form');
   }
}
