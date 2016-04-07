<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function() {


    Route::get('/', [
        'as' => 'index', // lien vers la page
        'uses' => "IndexController@index"
    ]);
    Route::post('/formulaire', [
        'as' => 'formulaire', // lien vers la page
        'uses' => "IndexController@formulaire"
    ]);
});
Route::group(['middleware' => 'web'], function () {


    Route::get('/index', 'IndexController@index');

});