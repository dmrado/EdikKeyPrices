<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('layouts.pc');
});*/

Route::get('/', 'CategoryController@index');

Route::get('/form', 'CategoryController@form');

//эти два нижних роута работают с примером AjaxController
//Route::get('ajax', function (){
   //return view('message');
//});
//Route::post('/getmsg', 'AjaxController@index');

/*Route::get('/getCarBrand/{selected}', function(){
    $carBrand = Carbrand::wherecarbrand_name('selected')->get();
    echo Carbrand::find($carBrand->carbrand_name)->lists();
});
*/

Route::post('/getCarBrand', 'CarBrandController@getCarBrand');//->name('getCarBrand');//именнованный маршрут работает с методом route формы (Пример: form action="{{route('getCarBrand')}} - стр. 460
Route::get('/getCarBrand/{selected}', 'CarBrandController@getCarBrand');//->name('getCarBrand');//именнованный маршрут работает с методом route формы (Пример: form action="{{route('getCarBrand')}} - стр. 460

Route::post('/getCarMod', 'CarModController@getCarMod');
Route::post('/getCarYear', 'CarYearController@getCarYear');
Route::post('/getKey', 'CarYearController@getKey');