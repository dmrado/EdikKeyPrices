<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $isMobile = false;//хранит логическое свойство: если с мобильного - то true, с рс - false
    public $parentView;//это свойство позволит не выполнять проверку каждый раз, когда понадобится род устройства, оно хранит строку с именем соответстующего родительского шаблона

    public function __construct()
    { //стр 587 User-Agent - это параметр, хранящий сведения об обозревателе юзера метод реквест вызывает ответ браузера об значнии этого свойства и далее обрабатывает. Здесь заполняются оба объявленных нами свойства класса
        //(strtolower - преобразует строку в нижний регистр)
        $userAgent = strtolower(request()->header("User-Agent"));
        if (preg_match("/phone|iphone|itouch|ipod|symbian|android|htc_|" .
            "htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|" .
            "fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericson|" .
            "^sie-|nintendo/", $userAgent)){
            $this->isMobile = true;
        } else {
            if (preg_match("/mobile|pda;|avantgo|eudoraweb|minimo|netfront|" .
                "brew|teleca|lg;|lge |wap; /", $userAgent)){
                $this->isMobile = true;
            }
        }
        if($this->isMobile){
            $this->parentView = "layouts.mobile";
        } else {
            $this->parentView = "layouts.pc";//пути записаны относительно папки resources\views
        }
    }
}
