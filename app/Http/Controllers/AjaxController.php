<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller //это просто пример можно грохнуть
{
    public function index(){
        $msg = "Это сообщение получено Ajax";
        return response()->json(array('msg' => $msg), 200);
    }


}
