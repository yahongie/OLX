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

use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');
Route::get('home', 'HomeController@index')->name("home");
Route::get('/user/country/cities','HomeController@index');


Route::group(['middleware' => ['auth']], function () {
Route::group(['middleware' => ['setlanguage']], function () {
Route::post('/user/password', 'UserController@changePassword');
Route::get('/location', 'HomeController@locations');
Route::get('language/{language_id}', 'HomeController@setLanguage');
Route::post('user/token', 'UserController@updateUserFireBaseToken');
Route::get('user/orders/statistics', 'OrderController@userStatistics');


Route::group(['prefix' => '/admin', 'middleware' => 'Admin'], function () {

Route::get('/', 'HomeController@admin')->name('adminHome');
Route::resource('profile', 'UserController', ['only' => ['show', 'update']]);
Route::resource('languages', 'LanguageController', ['except' => ['destroy', 'show']]);
Route::resource('countries', 'CountryController', ['except' => ['destroy', 'show']]);
Route::resource('cities', 'CityController', ['except' => ['destroy', 'show']]);
Route::resource('categories', 'CategoryController', ['except' => ['destroy', 'show']]);
Route::resource('services', 'ServiceTypeController', ['except' => ['destroy', 'show']]);

});

Route::group(['prefix' => '/provider', 'middleware' => 'Providers'], function () {
Route::get('/', 'HomeController@provider')->name('providerHome');
Route::resource('profile', 'UserController', ['only' => ['show', 'update']]);
});
});


});

