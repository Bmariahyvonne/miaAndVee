<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;


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

Route::get('/',"SubscriberController@index");
Route::get('/edit/{id}',"SubscriberController@edit");
Route::get('/show/{id}',"SubscriberController@show");
Route::get('/create',"SubscriberController@create");
Route::post('/store',"SubscriberController@store");
Route::post('/update/{id}',"SubscriberController@update");

// Route::get('/', function () {
//     return view('welcome');
// });


