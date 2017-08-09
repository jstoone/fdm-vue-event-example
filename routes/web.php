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
Auth::routes();

// Laravel defaults
Route::view('/', 'welcome');
Route::get('/home', 'HomeController@index')
    ->name('home');

// User Subscriptions
Route::get('/subscriptions', 'UserSubscriptionsController@index')
    ->name('subscriptions');

// Login switcher
Route::get('/login-switcher/{user}', 'LoginSwitcherController@login')
    ->name('login.switch');
