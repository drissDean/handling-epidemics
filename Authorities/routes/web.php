<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search','TrackingHandlerController@index' );

Route::get('/in_contact/{phone_number}','TrackingHandlerController@fake_in_touch_visualisation' );

Route::post('/find_user','TrackingHandlerController@search' );

Route::get('/alert/{phone_number}', 'TrackingHandlerController@alert');
