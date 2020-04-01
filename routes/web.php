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

Route::get('/', function () { return view('default'); });

Route::get('/en', function () { return view('en'); });

Route::get('/de', function () { return view('de'); });

Route::get('/it', function () { return view('it'); });

Route::get('/nl', function () { return view('nl'); });

Route::get('/pt', function () { return view('pt'); });

Route::get('/es', function () { return view('es'); });

Route::post('/demand','MailController@demand');

Route::post('/contact','MailController@contact');
