<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiUser;


// Route::get('/', function () {
//     return view('welcome');
// });

// setelah berhasil login dan menentukan hak akses user
Route::get('/', [MultiUser::class, 'index'])->name('/');

Route::get('/dashboard', function () {
    return view('layouts.admin.main');
});

Route::get('/log', function () {
    return view('layouts.loginpage.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
