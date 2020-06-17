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
    return view('auth/login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
//Route::get('/allowances', function () {
//    return view('allowances');
//});
//Route::get('/user-profile', function () {
//    return view('user_profile');
//});

Route::resource('employees','EmployeeController');
Route::resource('new_employee','EmployeeController');
Route::resource('show_profile','EmployeeController');
Route::resource('allowance','AllowanceController');
Route::resource('add_allowance','AllowanceController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
