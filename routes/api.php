<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('json')->as('json.')->group(function () {
    Route::prefix('get')->group(function () {
        Route::post('questions_edit', 'QuestionsController@json_edit')->name('questionsEdit');
        Route::post('answers_edit', 'AnswersController@json_edit')->name('answersEdit');
    });
});
