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

Route::get('/', function () {
    return view('index');
})->name('auth');

Route::group(['middleware' => 'auth'], function () {

    //dashboard
    Route::get('/dashboard', function () {
        return view('show');
    });

    //subjects
    Route::group(['prefix' => 'subjects'], function () {
        Route::get('/create', 'SubjectController@create')->name('subject.create');
        Route::get('/', 'SubjectController@index')->name('subject.index');
        Route::post('/getall', 'SubjectController@getall')->name('subject.getall');
    });

    //stages
    Route::group(['prefix' => 'stages'], function () {
        Route::get('/', 'StageController@index')->name('stage.index');
        Route::post('/getall', 'StageController@getall')->name('stage.getall');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
