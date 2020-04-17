<?php

use Illuminate\Support\Facades\Route;

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
/*
    $agent = new Agent();
   $ip = ($agent->getIp());
   $data = \Location::get();
   dd($data,\Location::get($ip));
    * */
Route::get('/', 'HomeController@index');

