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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@index')->name('about');
// Route::get('/post', 'PostController@index')->name('post');
// Route::post('/post', function(Request $request){
//    dd($request->post);
// })->name('post');

Route::get('/post','PostController@index')->name('post');
Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post','PostController@store')->name('post.store');

Route::get('/vue','VueController@index')->name('vue.index');