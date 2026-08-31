<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KursusController;
use App\Models\Kursus;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'showLogin')->name('auth.login');

    Route::get('/auth/register',  'showRegister')->name('auth.register');

    Route::post('/auth/login', 'login')->name('login');

    Route::post('/auth/register', 'register')->name('register');
});

Route::get('/about', function () {
    // $nama = 'Novi Nurkhaeni';
    // $data = 'Novi Nurkhaeni';
    // $umur = 15;

    // return view('about', ['data' => $nama, 'umur' => $umur]);
    // return view('about', compact('data', 'umur'));
    // return view('about')
    //             ->with('data', $nama)
    //             ->with('umur', $umur);

    return view('about');
});

Route::get('/contact', [AdminController::class, 'index']);

Route::get('/kursus', [KursusController::class, 'index']);

Route::get('/kursus/{id}', [KursusController::class, 'show']);
