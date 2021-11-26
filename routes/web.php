<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace' => 'Admin', 'prefix'=>'admin'], function (){
    //home for admin after login is correct
    Route::get('/home','MainController@index')->name('admin.home'); 

    ///route for authentication admin
    Route::get('login', 'AuthController@login')->name('admin-login');
    Route::post('login-check', 'AuthController@loginCheck')->name('login-check');

    Route::group(['middleware' => 'auth:admin'], function(){
    //room module
    Route::resource('rooms','RoomController');    

    //logout for admin
    Route::get('logout', 'AuthController@logout')->name('admin.logout');


    });
});
Route::group(['namespace' => 'User'], function (){

    ///store boobing for user
    Route::post('booking_user', 'BookingController@Store')->name('booking_user');
    
});
//logout for user
Route::get('user\logout', 'Auth\LoginController@logout')->name('user.logout');




