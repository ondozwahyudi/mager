<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
    Alert::success('hellow');
    return view('welcome');
});



Auth::routes();
Route::get('/test', 'testController@test');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');
Route::get('home', 'HomeController@index')->name('home');
Route::get('home/{uuid}', 'HomeController@show')->name('home.show');
Route::post('home/store', 'HomeController@store')->name('home.store');
Route::post('home/kode', 'HomeController@kode')->name('home.kode');
Route::get('home/delete/{uuid}', 'HomeController@delete')->name('home.delete');
Route::group(['middleware' => ['verified']], function () {
});
