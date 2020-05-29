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
Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index')->name('users.list');
    Route::get('/addUser', 'UserController@create')->name('create.user');
    Route::post('/addUser', 'UserController@store')->name('store.user');
    Route::get('/edit-user{id}','UserController@findbyId')->name('edit.user');
    Route::post('/edituser{id}','UserController@update')->name('update.users');
});


//Route::prefix('customer')->group(function(){
//    Route::get('index','CustomerController@index');
//    Route::get('create',function (){
//        //
//    });
//    Route::post('save',function (){
//        //
//    });
//    Route::get('/show/{id?}',function ($id=1){
//        //
//    });
//    Route::get('/edit/{id?}',function ($id=2){
//        //
//    });
//
//    Route::patch('update/{id}',function (){
//        //
//    });
//
//    Route::delete('{id}',function (){
//      //
//    });
//});




