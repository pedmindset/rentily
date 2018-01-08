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



//company Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('company','\App\Http\Controllers\CompanyController');
  Route::post('company/{id}/update','\App\Http\Controllers\CompanyController@update');
  Route::get('company/{id}/delete','\App\Http\Controllers\CompanyController@destroy');
  Route::get('company/{id}/deleteMsg','\App\Http\Controllers\CompanyController@DeleteMsg');
});


Route::group(['middleware'=> 'web'],function(){
});
//team Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('team','\App\Http\Controllers\TeamController');
  Route::post('team/{id}/update','\App\Http\Controllers\TeamController@update');
  Route::get('team/{id}/delete','\App\Http\Controllers\TeamController@destroy');
  Route::get('team/{id}/deleteMsg','\App\Http\Controllers\TeamController@DeleteMsg');
});

//category Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('category','\App\Http\Controllers\CategoryController');
  Route::post('category/{id}/update','\App\Http\Controllers\CategoryController@update');
  Route::get('category/{id}/delete','\App\Http\Controllers\CategoryController@destroy');
  Route::get('category/{id}/deleteMsg','\App\Http\Controllers\CategoryController@DeleteMsg');
});

//item Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('item','\App\Http\Controllers\ItemController');
  Route::post('item/{id}/update','\App\Http\Controllers\ItemController@update');
  Route::get('item/{id}/delete','\App\Http\Controllers\ItemController@destroy');
  Route::get('item/{id}/deleteMsg','\App\Http\Controllers\ItemController@DeleteMsg');
});

//package Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('package','\App\Http\Controllers\PackageController');
  Route::post('package/{id}/update','\App\Http\Controllers\PackageController@update');
  Route::get('package/{id}/delete','\App\Http\Controllers\PackageController@destroy');
  Route::get('package/{id}/deleteMsg','\App\Http\Controllers\PackageController@DeleteMsg');
});

//customer Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('customer','\App\Http\Controllers\CustomerController');
  Route::post('customer/{id}/update','\App\Http\Controllers\CustomerController@update');
  Route::get('customer/{id}/delete','\App\Http\Controllers\CustomerController@destroy');
  Route::get('customer/{id}/deleteMsg','\App\Http\Controllers\CustomerController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
//reservation Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('reservation','\App\Http\Controllers\ReservationController');
  Route::post('reservation/{id}/update','\App\Http\Controllers\ReservationController@update');
  Route::get('reservation/{id}/delete','\App\Http\Controllers\ReservationController@destroy');
  Route::get('reservation/{id}/deleteMsg','\App\Http\Controllers\ReservationController@DeleteMsg');
});

Route::group(['middleware'=> 'web'],function(){
});
//invoice Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('invoice','\App\Http\Controllers\InvoiceController');
  Route::post('invoice/{id}/update','\App\Http\Controllers\InvoiceController@update');
  Route::get('invoice/{id}/delete','\App\Http\Controllers\InvoiceController@destroy');
  Route::get('invoice/{id}/deleteMsg','\App\Http\Controllers\InvoiceController@DeleteMsg');
});

//payment Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('payment','\App\Http\Controllers\PaymentController');
  Route::post('payment/{id}/update','\App\Http\Controllers\PaymentController@update');
  Route::get('payment/{id}/delete','\App\Http\Controllers\PaymentController@destroy');
  Route::get('payment/{id}/deleteMsg','\App\Http\Controllers\PaymentController@DeleteMsg');
});
