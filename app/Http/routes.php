<?php
use Illuminate\Support\Facades\DB;
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

//Route::get('insert', function(){
//    DB::insert('insert into posts(title, content) values(?,?)' ,['php with laravel', 'laravel content']);
//});
//
//Route::get('read', function(){
//   $results = DB::select('select * from posts where id = ?', [103]);
//
//    foreach ($results as $result) {
//        return $result->title;
//    }
//
//});
//
//Route::get('update', function(){
//    $updated = DB::update('update posts set title = "Update title" where id = ?', [103]);
//    dd($updated);
//});
//
//Route::get('delete', function(){
//    $deleted = DB::delete('delete from posts where id = ?', ['103']);
//
//    dd($deleted);
//});

Route::get('/', ['as' => 'root', function () {
    return view('welcome');
}]);

//Route::get('/post/{id}', 'PostController@index');


//Route::get('contact', 'PostController@contact');
//
//Route::get('post/{id}/{name}/', 'PostController@show_post');


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
