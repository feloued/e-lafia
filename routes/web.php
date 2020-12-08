<?php

use App\Http\Controllers\Auth\LoginController;
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
    return view('auth/login');
});


//Route::get('/view/login.blade', 'LoginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inscription', 'userController@index')->name('index');
Route::post('/inscription/save', 'userController@inscrire')->name('inscription');
