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
    return view('welcome');
});

// // Route::get('users/{id}', function ($id) {
// //     return "This is post number ". $id;
// // });

// Route::get('/contact/name', array( 'as' => 'admin.home', function () {
//     $url = route('admin.home');

//     return "This is the contact Page". $url;
// }));


// Route::get('/post', 'PostController@index');

Route::resource('posts', 'PostController');

Route::get('/contact', 'PostControler@contact')
