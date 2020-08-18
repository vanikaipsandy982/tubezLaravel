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
// root '/'
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/category', function () {
//     $name = 'Vanika Ipsandy';
//     return view('category', ['name' => $name]);
// });
Route::get('/', 'PagesController@home');
// //category
// Route::get('/category', 'CategoryController@index');
// //tambah data category
// Route::get('/category/create', 'CategoryController@create');
// Route::get('/category/{category}', 'CategoryController@show');
// //menyimpan data category
// Route::post('/category', 'CategoryController@store');
// //menghapus data
// Route::delete('/category/{category}', 'CategoryController@destroy');
// //edit dan update
// Route::get('/category/{category}/edit', 'CategoryController@edit');
// Route::patch('/category/{category}', 'CategoryController@update');

// //book
// Route::get('/book', 'BookController@index');
// //tambah data buku
// Route::get('/book/create', 'BookController@create');
// Route::get('/book/{book}', 'BookController@show');
// //menyimpan data buku
// Route::post('/book', 'BookController@store');
// //menghapus data
// Route::delete('/book/{book}', 'BookController@destroy');
// //edit dan update
// Route::get('/book/{book}/edit', 'BookController@edit');
// Route::patch('/book/{book}', 'BookController@update');

Route::resource('category', 'CategoryController');
Route::resource('book', 'BookController');
//login
Route::get('/', 'PagesController@index');
Route::post('/login', 'LoginController@index');
Route::post('/process', 'LoginController@verify');
