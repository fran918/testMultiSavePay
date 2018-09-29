<?php

//definimos la clase para las cabeceras
class wsHeader
{
    public $Code = 0;
    public $Desc = '';

    public function __construct($code, $desc){
        $this->Code=$code;
        $this->Desc=$desc;
    }
}


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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', 'DataController@show');

