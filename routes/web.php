<?php

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
    return view('contact');
});

Route::get('/siswa', function () {
    $data = [
        [
            'nama' => 'Budi',
            'nilai' => 80,
            'id' => '001',
            'tglLahir' => '05/01/2000',
            'jurusan' => 'PPLG',
        ],
        [
            'nama' => 'Novi',
            'nilai' => 85,
            'id' => '002',
            'tglLahir' => '11/11/2000',
            'jurusan' => 'PPLG',
        ],
        [
            'nama' => 'Wahyu',
            'nilai' => 90,
            'id' => '003',
            'tglLahir' => '06/10/2000',
            'jurusan' => 'PPLG',
        ],
    ];

    return view('siswa.index', ['data' => $data]);
});

Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    return view('siswa.show', ['id' => $id]);
});
