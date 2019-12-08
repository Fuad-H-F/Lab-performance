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
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/employee/userlist', 'EmployeeController@index')->name('employee.index');
Route::get('/employee/add', 'EmployeeController@add')->name('employee.add');
Route::post('/employee/add', 'EmployeeController@store');