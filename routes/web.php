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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Admin
Route::get('/admin/home', 'Admin\HomepageController@index')->name('home');

//Page
Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path',
]);

Route::get('/destination', [
    'uses' => 'Page\HomepageController@destination',
    'as' => 'destination_path',
]);
Route::get('/destination-show', [
    'uses' => 'Page\HomepageController@destination_show',
    'as' => 'destination_show_path',
]);
