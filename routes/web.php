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
Route::get('/reservation/{sBookingCode}', 'PagesController@showReservationPage');
Route::get('/about', 'PagesController@showAboutPage');

Route::get('/confirmBooking/{sBookingCode}', 'ReservationController@confirmBooking');
Route::get('/login', 'PagesController@showLoginPage');
Route::group(['middleware' => 'adminaccount'], function () {

    Route::get('/logout', 'PagesController@doLogout');
    Route::get('/dashboard', 'PagesController@showDashboardPage');
    Route::prefix('booking')->group(function () {
        Route::get('/add', 'PagesController@showAddBookingPage');
        Route::get('/edit', 'PagesController@showEditBookingPage');
        Route::get('/view', 'PagesController@showViewBookingPage');
    });
});

Route::prefix('rest')->group(function () {
    Route::post('saveBooking', 'ReservationController@saveReservation');
    Route::post('doLogin', 'RestController@doLogin');

    Route::group(['middleware' => 'adminsession'], function () {

    });
});
