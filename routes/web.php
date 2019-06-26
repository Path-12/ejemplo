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

Route::get('/', 'PagesController@home');

Route::get('/blog', 'PagesController@blog');

Route::get('/stats', 'PagesController@stats');

Route::get('/contact', 'PagesController@contact');

Route::get('/single', 'PagesController@single');

Route::get('/about', 'PagesController@about');

Route::post('mensajes',function(){
	$data = request()->all();
	//var_dump($data);
	Mail::send("emails.mensajes", $data, function($message) use ($data){
		$message->from($data['Email'], $data['FirstName'])
		->to('jperez.ejemplo1@gmail.com','Juan')
		->subject($data['Subject']);
	});
	return back();
})->name('mensajes');
