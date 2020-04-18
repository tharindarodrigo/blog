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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-page', function(){
    return view('myPage');
});

Route::get('/posts', 'PostController@index');
//Route::get('/posts/{x}/{y}', 'PostController@index');

//Route::get('/blogs/', function($post_id = null, $user){
//    echo "<h1>{$user} - {$post_id}</h1>";
//});



