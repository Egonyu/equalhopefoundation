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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('frontend.master');
})->name('home');

Route::get('education', 'PagesController@education')->name('education');
Route::get('sanitation', 'PagesController@sanitation')->name('sanitation');
Route::get('volunteers', 'PagesController@volunteers')->name('volunteers');
Route::get('relief', 'PagesController@relief')->name('relief');
Route::get('contact', 'PagesController@contact')->name('contact');