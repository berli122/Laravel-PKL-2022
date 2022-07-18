<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;

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

Route::get('siswa', [SiswaController::class, 'tampil']);


// Route::get('post/{id}', 'PostController@search');
// Route::get('post/judul/{title}', 'PostController@search_title');
// Route::get('post/edit/{id}/{title}/{content}', 'PostController@edit');
// Route::get('post/tambah/{title}/{content}', 'PostController@tambah');
// Route::get('post/delete/{id}', 'PostController@hapus');

