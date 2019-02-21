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

Route::get('/', [
    'as' => 'index',
    'uses' => 'GuestController@index']);

Route::get('/about', function () {
    return view('admin.about');
});


Route::get('/showtimes', [
    'as' => 'showtimes',
    'uses' => 'GuestController@showtimes']);


Route::post('/booking', [
    'as' => 'booking',
    'uses' => 'GuestController@booking']);

Route::get('/screen', [
    'as' => 'screen',
    'uses' => 'GuestController@screen']);

Route::post('/api/timer', [
    'as' => 'api.timer',
    'uses' => 'ApiController@api']);

Route::get('/adminAdd', [
    'as' => 'adminAdd',
    'uses' => 'AddseatController@viewSeat']);

Route::get('/adminAddSeat', [
    'as' => 'adminAddSeat',
    'uses' => 'AddseatController@addSeat']);

Route::post('/seat', [
    'as' => 'seat',
    'uses' => 'GuestController@seatCreatStore']);

Route::get('/checkStatus', [
    'as' => 'checkStatus',
    'uses' => 'CheckStatus@checkStatus']);


Route::post('/api/order', [
    'as' => 'api.order',
    'uses' => 'ApiController@order']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
