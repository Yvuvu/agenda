<?php

use Illuminate\Support\Facades\Route;

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
    return view('fullcalendar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::redirect('/', '/login');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/booking','FullCalendarController@index');
Route::post('/booking/create','FullCalendarController@create');
Route::post('/booking/update','FullCalendarController@update');
Route::post('/booking/delete','FullCalendarController@destroy');
