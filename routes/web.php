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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home', 'AdminController@index')->name('home');

//add user subscription into user subscription
Route::get('/user_subscriptions/subscribe/{id}', 'UserSubcriptionController@subscribe');

Route::resource('/advertice-categories', 'Api\AdverticeCategoriesController');
Route::resource('/adverticement', 'Api\AdverticementsController');
Route::resource('/payments', 'Api\PaymentsController');
Route::resource('/subscription-plans', 'Api\SubscriptionPlansController');
Route::resource('/user-subscriptions', 'UserSubcriptionController');
