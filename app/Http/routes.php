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

Route::get('/', ['as' => 'root', function () {
    return view('welcome');
}]);

//Route::get('/post/{id}', 'PostController@index');

Route::resource('posts', 'PostController');


//
//Route::get('/about', function(){
//    return "Hi about page";
//});
//
//Route::get('/contact', function(){
//    return "Hi i am contact";
//});
//
//Route::get('/post/{id}/{name}', function($id, $name){
//    return "This is post number " . $id . " " . $name;
//});
//
//Route::get('/admin', ['as' => 'admin.home', function(){
//    return "admin";
//}]);
