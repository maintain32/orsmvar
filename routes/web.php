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
Route::get('/reserve', 'PagesController@showReservePage');
Route::get('/about', 'PagesController@showAboutPage');
Route::get('/login', 'PagesController@showLoginPage');

Route::get('/add/booking', 'PagesController@showAddBookingPage');
Route::get('/edit/booking', 'PagesController@showEditBookingPage');
Route::get('/view/booking', 'PagesController@showViewBookingPage');

Route::post('/rest/saveBooking', 'ServerController@saveReservation');
