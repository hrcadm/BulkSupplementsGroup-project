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

// Root url to show login form for now
Route::get('/', 'Auth\LoginController@showLoginForm');


/////////////////////////////////////////////////////////////////////////////////////////
//////////////////////   AUTH ROUTES ////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////


// Dashboard index route
Route::get('/home', 'HomeController@index')->name('home');

// Members/Users CRUD
Route::get('my-profile', 'UserController@showMyProfile')->name('myprofile');
Route::resource('users', 'UserController');

// Companies CRUD
Route::resource('company', 'CompanyController');

// Membership CRUD
Route::resource('membership', 'MembershipController');

// Products CRUD
Route::resource('product', 'ProductController');

// Product Categories CRUD
Route::resource('product-categories', 'ProductCategoriesController');

// Product Categories CRUD
Route::resource('product-subcategories', 'ProductSubCategoriesController');