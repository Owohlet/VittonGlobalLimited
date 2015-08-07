<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::model('photo','Photo');

Route::get('/', 'UserController@index');


Route::get('users', function()
{
	return View::make('users');
});
Route::get('portfolio','UserController@portfolio');
Route::get('show/{photo}','UserController@show');

Route::get('contact', 'MailController@contact');
Route::post('contact_request','MailController@getContactUsForm');

Route::get('order', 'MailController@order');
Route::post('order_request', 'MailController@makeorder');

Route::get('fileupload', function()
{
	return View::make('fileupload');
});
Route::get('/vtadmin','HomeController@home');

Route::get('/create','HomeController@create');
Route::post('/create', 'HomeController@saveCreate');

Route::get('/edit/{photo}','HomeController@edit');
Route::post('/edit', 'HomeController@doEdit');

Route::get('/delete{photo}','HomeController@delete');
Route::post('/delete', 'HomeController@doDelete');