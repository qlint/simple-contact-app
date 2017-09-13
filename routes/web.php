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
Route::resource('contact', 'Data4pageController');

Route::resource('contactgroup', 'MycontactgroupController');

Route::get('email', 'PagesController@getEmail');

Route::get('contactgrp', 'PagesController@getContactgrp');

Route::get('/', 'PagesController@getIndex')->name('home');


