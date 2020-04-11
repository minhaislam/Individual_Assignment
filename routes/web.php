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
    return view('Home');
});
//Route::get('/', 'HomeController@index')->name('home.index')
Route::get('/login', 'LoginController@index')->name('login.index')
;
Route::post('/login', 'LoginController@login');

Route::get('/registration', 'registrationController@index');
Route::post('/registration', 'registrationController@register')->name('register.user');
Route::group(['middleware' => ['sess']], function(){
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/scout', 'ScoutController@index')->name('scout.index');
Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/admin/profile', 'AdminController@profile')->name('profile.admin');
Route::get('/scout/profile', 'ScoutController@profile')->name('profile.scout');
Route::get('/user/profile', 'UserController@profile')->name('profile.user');
Route::get('/admin/view_users', 'AdminController@list')->name('home.list');
Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
Route::post('/admin/delete/{id}', 'AdminController@destroy');
Route::get('/admin/create_user', 'AdminController@add')->name('add.user');
Route::post('/admin/create_user', 'AdminController@create')->name('create.user');
});
Route::get('/logout', 'LogoutController@index')->name('logout.index')
;