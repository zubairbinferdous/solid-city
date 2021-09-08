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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/neworder', 'HomeController@neworder')->name('neworder');
Route::get('/allorder', 'HomeController@allorder')->name('allorder');
Route::get('/allcomp', 'HomeController@anycomp')->name('anycomp');
Route::post('/data_insert','HomeController@insert');
Route::get('delete_data/{id}','HomeController@delete');
Route::get('view_data/{id}','HomeController@view');
Route::get('edit_data/{id}','HomeController@edit');
Route::post('update_data/{id}','HomeController@update');


// admin-login

  // Authentication Routes...
  Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');

  // admin-register 
  Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'Auth\RegisterController@register');

//   // admin-password-reset
//   Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//   Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//   Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//   Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// //admin-confirm-rester
//   Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
//   Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

