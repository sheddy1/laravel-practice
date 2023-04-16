<?php

use Illuminate\Support\Facades\Route;
// use app\http\controllers\MainController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/login1', 'MainController@login')->name('auth.login');

Route::get('/register1', 'MainController@register')->name('auth.register');

Route::post('/save', 'MainController@save')->name('auth.save');

Route::post('check', 'MainController@check')->name('auth.check');

Route::get('dashboard', 'MainController@dashboard')->name('auth.dashboard');

Route::get('logout', 'MainController@logout')->name('auth.logout');
