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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']) ->name('home');

// Praktikum 1 route ke 127.0.0.1/
Route::get('/', function () {
    echo "Selamat Datang";
});

// Praktikum 1 route ke 127.0.0.1/about
Route::get('/about',function (){
    echo " NIM : 2041723001</br> 
    Nama : Farid Bagus Setiawan";
});

 //Praktikum 1 route ke 127.0.0.1/articles/{id}
 Route::get('/articles/{id}',function($id){
     echo "Halaman Artikel ".$id;
 });


