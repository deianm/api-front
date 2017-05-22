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


Route::get('/', 'LandingController@index');
Route::get('/register', 'RegistrationController@index');
Route::get('/login', 'LoginController@index');
Route::get('/logout', 'LogoutController@logout');
Route::post('/login_auth', 'LoginController@login');
Route::get('/dashboard', 'DashboardController@index');

Route::get('/dashboard/offers', 'DashboardController@offers');
Route::get('/dashboard/stats', 'DashboardController@stats');
Route::get('/dashboard/users', 'DashboardController@users');
Route::get('/dashboard/notifications', 'DashboardController@notifications');

Route::post('/dashboard/request_join', 'DashboardController@request_join');
Route::post('/dashboard/cancel_join', 'DashboardController@cancel_join');

Route::post('/dashboard/create_offer', 'DashboardController@create_offer');
Route::post('/dashboard/cancel_offer', 'DashboardController@cancel_offer');

