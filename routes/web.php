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
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/',[ 'as' => 'index', 'uses'=> 'FrontendController@index']);

    Route::group(['prefix' => 'add'], function () {
        Route::get('/{slug}', ['as'=>'show-advertisement', 'uses'=>'FrontendController@show']);
    });
});

Route::group(['namespace' => 'Backend', 'middleware' => 'auth', 'prefix' => 'backend'], function () {
    Route::get('/', 'BackendController@index');
    Route::resource('adds', 'AdvertisementsController');
});

Auth::routes();