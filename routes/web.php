<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Praktikum 1 - Langkah 6: Ubah route '/' untuk menampilkan 'Selamat Datang'
Route::get('/', function () {
    return 'Selamat Datang';
});

// Langkah 2: Menampilkan string Hello
Route::get('/hello', function () {
    return 'Hello World';
});

// Langkah 4: Menampilkan string World
Route::get('/world', function () {
    return 'World';
});

// Langkah 7: Menampilkan NIM dan Nama (Silakan isi NIM kamu)
Route::get('/about', function () {
    return 'NIM: 24552021015, Nama: Roudhotul Silvia'; 
});

// Langkah 13: Route dengan parameter ID Artikel
Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID 15 " . $id;
});

// Praktikum 1.3 - Langkah 17: Parameter Opsional dengan Default Value
Route::get('/user/Roudhotul Silvia', function ($name = 'Silvia') {
    return 'Nama saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($spostid, $commentid) {
    return "Post ke-1 " . $spostid . ",Komentar ke-5 " . $commentid;
});
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});