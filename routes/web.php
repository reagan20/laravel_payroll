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

Route::get('/', function () {
    return view('dashboard');
});
//Route::get('/employees', function () {
//    return view('employees');
//});
//Route::get('/user-profile', function () {
//    return view('user_profile');
//});

Route::resource('employees','EmployeeController');
Route::resource('new_employee','EmployeeController');
Route::resource('show_profile','EmployeeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
