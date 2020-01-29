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

Route::get('/', 'PagesController@showHomePage');
Route::get('/contact', 'PagesController@showContactPage');
Route::get('/reserve', 'PagesController@showReservePage');
Route::get('/gallery', 'PagesController@showGalleryPage');
