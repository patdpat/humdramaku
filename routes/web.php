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




Route::get('files/payment/{filename}', function($filename)
{
    $filePath = storage_path().'/payment/'.$filename;

    if (!File::exists($filePath))
    {
        return Response::make("File does not exist.", 404);
    }

    $fileContents = File::get($filePath);

    return Response::make($fileContents,200);
//
//     Image
//    return Response::make($fileContents, 200);
});




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



Route::get('/payment', [
    'as' => 'payment',
    'uses' => 'GuestController@payment']);

Route::get('/map', [
    'as' => 'map',
    'uses' => 'GuestController@map']);


Route::get('/ticket', [
    'as' => 'ticket',
    'uses' => 'GuestController@ticket']);

Route::get('/test', function () {
    return view('emails.test' , ['orderid'=>'A' , 'showSeat'=>'B' , 'name'=>'C']);
});


Route::post('/pay', [
    'as' => 'pay',
    'uses' => 'GuestController@pay']);


Route::post('/changeStatus', [
    'as' => 'changeStatus',
    'uses' => 'CheckStatus@changeStatus']);

