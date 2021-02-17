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
    return view('welcome',['name' => 'John']);
});


Route::get('/user/{id?}', function($id = null){
    return 'User ' . $id;
});

Route::get('/check', function(){
    return redirect('/');
})->middleware('check.age');

Route::get('/home', function(){
    return "Not Allowed";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
