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

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
Route::resource('posts','App\Http\Controllers\PostsController');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',function(){
	Auth::logout();
	Return Redirect::to('login');
});

Route::resource('admin','App\Http\Controllers\HomeController');
/*Route::get('/register',function(){
	Return Redirect::to('login');
});*/
