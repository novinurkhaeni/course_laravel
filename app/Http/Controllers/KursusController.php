<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kursus::where('status', 'Aktif')
            ->orderBy('nama_kursus', 'asc')
            ->orderBy('level', 'desc')
            ->get();

        return view('kursus.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        // $data = Kursus::where('id_kursus', $id)->first();
        $data = Kursus::findOrFail($id);
        return view('kursus.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
