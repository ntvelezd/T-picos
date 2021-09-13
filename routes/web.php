<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/handbag/list', 'App\Http\Controllers\HandbagController@list')->name("handbag.list");
Route::get('/admin/', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/handbag/list', 'App\Http\Controllers\Admin\AdminHandbagController@list')->name("admin.handbag.list");
Auth::routes();

