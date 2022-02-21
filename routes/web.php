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

//Area pubblica - FrontOffice
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

//Area privata - backOffice
Route::prefix("admin")->namespace("Admin")->middleware("auth")->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource("posts", "PostController");
    Route::resource("categories", "CategoryController");
    Route::resource("tags", "TagController");


});

// Route::get('/home', 'HomeController@index')->name('home');