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
Route::get('/', 'PageController@index');
Route::get('about-us', 'PageController@about');
Route::get('contact-us', 'PageController@contact');
Route::get('/datatables', function () {
    return view('datatables');
});
Route::resource('datatables/user', 'UserController');
Route::get('datatables/table/user', 'UserController@dataTable')->name('table.user');

