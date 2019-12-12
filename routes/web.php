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

//Home
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\HomeController@home']);

//About us
Route::match(['get', 'post'], 'AboutUs', ['as' => 'AboutUs', 'uses' => 'frontend\AboutUsController@aboutus']);

//Contact
Route::match(['get', 'post'], 'ContactUs', ['as' => 'ContactUs', 'uses' => 'frontend\ContactUsController@ContactUs']);

//Services 
Route::match(['get', 'post'], 'international', ['as' => 'international', 'uses' => 'frontend\InternationalserviceController@index']);
Route::match(['get', 'post'], 'shipment', ['as' => 'shipment', 'uses' => 'frontend\LclserviceController@index']);
Route::match(['get', 'post'], 'break-bulk', ['as' => 'break-bulk', 'uses' => 'frontend\BreakserviceController@index']);
Route::match(['get', 'post'], 'air-cargo', ['as' => 'air-cargo', 'uses' => 'frontend\AitserviceController@index']);
Route::match(['get', 'post'], '3pl', ['as' => '3pl', 'uses' => 'frontend\plserviceController@index']);
Route::match(['get', 'post'], 'project-cargo', ['as' => 'project-cargo', 'uses' => 'frontend\ProjectserviceController@index']);
Route::match(['get', 'post'], 'chartering', ['as' => 'chartering', 'uses' => 'frontend\CharteringserviceController@index']);
Route::match(['get', 'post'], 'custom-clearance', ['as' => 'custom-clearance', 'uses' => 'frontend\CustomserviceController@index']);