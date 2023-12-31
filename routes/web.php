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

Route::group(['middleware' => ['web']], function () {
  Route::get('/', 'App\Http\Controllers\MainController@home');
  Route::get('/customers', 'App\Http\Controllers\CustomerController@listing');
  Route::get('/customers/{id}/contacts', 'App\Http\Controllers\CustomerController@contacts');
});