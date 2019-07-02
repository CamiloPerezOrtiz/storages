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
#COMPANY#
Route::get('/show-companies', 'CompanyController@Companies')->name('show.companies');
Route::get('/edit-company/{id}','CompanyController@editCompany')->name('edit.company');
Route::post('/update-company/{id}','CompanyController@updateCompanyPost')->name('editCompanyPost');
Route::get('/delete-user/{id}','CompanyController@deleteCompany')->name('delete.company');
#USERS#
Route::get('/show-users/{id}','UserController@users')->name('show.users');
Route::get('/add-user/{id}','UserController@addUser')->name('add.user');
Route::post('/create-user','UserController@addUserPost')->name('createUserPost');
Route::get('/user-delete/{id}','UserController@deleteUser')->name('delete.user');
Route::get('/user-edit/{id}','UserController@editUser')->name('edit.user');
Route::post('/user-update/{id}','UserController@updateUserPost')->name('editUserPost');
#LICENSE#
Route::get('/show-licenses','LicenseController@licenses')->name('show.licenses');
Route::get('/license-edit/{id}','LicenseController@editLicense')->name('edit.license');
Route::get('/license-delete/{id}','LicenseController@deleteLicense')->name('delete.license');