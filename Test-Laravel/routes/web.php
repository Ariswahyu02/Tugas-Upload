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

Route::get("/", function(){
    return view("home");
});

Route::get("/about", function(){
    return view("about");
});

Route::get("/daftar_paket", "PaketController@index");

Route::get("/daftar_paket/tambah", "PaketController@tambah");

Route::post("/daftar_paket/tambah_jam", "PaketController@tambah_jam");  

Route::get("/daftar_paket/edit/{id}","PaketController@edit");

Route::post("/daftar_paket/update","PaketController@update");

Route::get("daftar_paket/hapus/{id}", "PaketController@hapus");