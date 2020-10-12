<?php

use GuzzleHttp\Middleware;
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


Route::get('/', function () {return view('welcome');});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Admin'], function() {
    Route::get('/login','AdminController@login')->name('admin.login');
    Route::post('/login','AdminController@checklogin')->name('check.admin.login');
    Route::group(['middleware'=>'auth:admin'], function() {
        Route::get('/dashboard','AdminController@index')->name('admin.dashboard');
        Route::get('/books', 'BookController@index')->name('admin.books');
        Route::get('/books/{id}', 'BookController@show');
        Route::put('/books/{id}', 'BookController@upgrade');
        Route::delete('/books/{id}', 'BookController@destroy');
        Route::delete('/books/add', 'BookController@create');
    });
});

Route::group(['prefix'=>'', 'middleware'=>'auth','namespace'=>'App\Http\Controllers'], function() {
    Route::group(['prefix'=>'books'], function() {
        Route::get('/','BookController@index')->name('books');    
        Route::get('borrow/{book}','BookController@create');    
        Route::put('borrow/{book}','BookController@store');
        Route::POST('show/{book}', 'BookController@show');
    });
    Route::get('/details', 'UserController@show');
    Route::group([], function() {
        Route::get('/','BorrowedBookController@index')->name('borrowed.books');    
    }); 
    
});









