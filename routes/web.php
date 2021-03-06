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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','MasterController@index');
Auth::routes();
Auth::routes([
   'reset' => false,
   'verify' => false,
   'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dormant','MasterController@dormantFetch')->name('dormant.fetch');
Route::get('getAcType','Search\SearchController@getAcType');
Route::get('getClientName','Search\SearchController@getClientName');
Route::get('getBranch','Search\SearchController@getBranch');


