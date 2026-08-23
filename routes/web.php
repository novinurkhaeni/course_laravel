<?php

use App\Models\Admin;
use App\Models\Kursus;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $nama = 'Novi Nurkhaeni';
    $data = 'Novi Nurkhaeni';
    $umur = 15;

    return view('about', ['data' => $nama, 'umur' => $umur]);
    // return view('about', compact('data', 'umur'));
    // return view('about')
    //             ->with('data', $nama)
    //             ->with('umur', $umur);
});

Route::get('/contact', function () {
    $data = Admin::all();
    // dd($data);
    return view('contact', ['data' => $data]);
});

Route::get('/kursus', function () {
    // $data = [
    //     [
    //         'id' => '1',
    //         'nama_kursus' => 'Pemrograman Web',
    //         'deskripsi' => 'Ini deskripsi',
    //         'harga' => 500000,
    //         'durasi' => 20,
    //         'level' => 'Menengah',
    //         'status' => 'Aktif'
    //     ],
    //     [
    //         'id' => '2',
    //         'nama_kursus' => 'Pemrograman Mobile',
    //         'deskripsi' => 'Ini deskripsi',
    //         'harga' => 900000,
    //         'durasi' => 40,
    //         'level' => 'Mahir',
    //         'status' => 'Aktif'
    //     ],
    //     [
    //         'id' => '2',
    //         'nama_kursus' => 'UI/UX Design',
    //         'deskripsi' => 'Ini deskripsi',
    //         'harga' => 400000,
    //         'durasi' => 20,
    //         'level' => 'Pemula',
    //         'status' => 'Tidak Aktif'
    //     ],
    // ];
    $data = Kursus::where('status', 'Aktif')
        ->orderBy('nama_kursus', 'asc')
        ->orderBy('level', 'desc')
        ->get();

    return view('kursus.index', ['data' => $data]);
});

Route::get('/kursus/{id}', function ($id) {
    // dd($id);
    $data = Kursus::where('id_kursus', $id)->first();
    return view('kursus.show', ['data' => $data]);
});
