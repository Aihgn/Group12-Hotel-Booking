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
	'as'=>'home',
	'uses'=>'PageController@getIndex'
]);

Route::get('home', [
	'as'=>'home',
	'uses'=>'PageController@getIndex'
]);

Route::get('rooms', [
	'as'=>'rooms',
	'uses'=>'PageController@getRooms'
]);

Route::get('about', [
	'as'=>'about',
	'uses'=>'PageController@getAbout'
]);


Route::get('myaccount',[
	'as'=>'myaccount',
	'uses'=>'PageController@getMyAccount'
]);

route::get('guestbooking', [
	'as'=>'guestbooking',
	'uses'=>'PageController@getGuestBooking'
]);

Auth::routes();

route::get('booking',[
	'as'=>'booking',
	'uses'=>'PageController@getBooking'
]);
 route::post('booking', [
 	'as'=>'booking',
 	'uses'=>'PageController@postBooking'
 ]);

 Route::get('/booking/add_room',[
 	'as'=>'add_room.action',
 	'uses'=>'PageController@addRoom'
 ]);