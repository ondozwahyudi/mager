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
Route::post('home/store', 'HomeController@store')->name('home.store');
Route::post('home/kode', 'HomeController@kode')->name('home.kode');
Route::get('home/delete/{uuid}', 'HomeController@delete')->name('home.delete');
Route::get('home', 'HomeController@index')->name('home');
Route::get('kelas/{uuid}', 'HomeController@show')->name('home.show');
Route::get('siswa/{id}/{uuid}', 'HomeController@dkSiswa')->name('siswa.index');

Route::post('kelas/{uuid}/questions', 'QuestionsController@store')->name('questions.store');
Route::get('questions/delete/{uuid}', 'QuestionsController@delete')->name('questions.delete');
Route::get('answers/delete/{id}', 'AnswersController@delete')->name('answers.delete');

Route::resource('kelas.questions', 'QuestionsController');
Route::resource('kelas.questions.answers', 'AnswersController');

