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
Route::get('/keys', 'CategoryController@keys');
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

Route::get('/getCarBrand', 'CarBrandController@getCarBrand');//->name('getCarBrand');//именнованный маршрут работает с методом route формы (Пример: form action="{{route('getCarBrand')}} - стр. 460
Route::get('/getCarBrand/{selected}', 'CarBrandController@getCarBrand');//->name('getCarBrand');//именнованный маршрут работает с методом route формы (Пример: form action="{{route('getCarBrand')}} - стр. 460

Route::get('/getCarMod/{selected}', 'CarModController@getCarMod');
Route::get('/getCarYear/{selected}', 'CarYearController@getCarYear');
Route::get('/getKey/{carYearId}', 'KeyController@getKey');

Route::get('/getSharp/{keySharp}', 'ServiceController@getSharp');//хочу что бы нарезка лезвия менялась без перезагрузки страницы

Route::get('/getService', 'ServiceController@getService');

//Route::get('/lessons', 'LessonController@getlessons');
//Route::get('/lessons/{someLesson}', 'LessonController@getlesson');//нет контроллера
Route::get('/users/export', 'UsersController@export');
Route::get('/users/import', 'UsersController@import');

Route::get('/carbrands/export', 'CarBrandController@export');
Route::get('/carbrands/import', 'CarBrandController@import');

Route::get('/ajax/brands', 'CarBrandController@ajaxGetCarBrand')->middleware('cors');
Route::get('/ajax/models/{id}', 'CarModController@ajaxGetCarModel')->middleware('cors');
Route::get('/ajax/years/{id}', 'CarYearController@ajaxGetCarYear')->middleware('cors');

Route::get('/ajax/years/import', 'CarYearController@import');

Route::get('/ajax/keys/{caryear}', 'KeyController@ajaxGetKey')->middleware('cors');

Route::post('/mailer', 'UserController@store');
