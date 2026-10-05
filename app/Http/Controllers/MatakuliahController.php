<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Menampilkan form untuk menambahkan data matakuliah";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Menyimpan data matakuliah baru dari form ke database";
    }

    /**
     * Display the specified resource.
     */
    public function show(?string $param1 = null)
    {
        if (!empty($param1)) {
            $result = "Anda mengakses matakuliah ".$param1;
        } else {
            $result = "Masukkan kode matakuliah!";
        }
        return $result;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $param1)
    {
        return "Mengedit data matakuliah dengan kode: ".$param1;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Mengupdate data matakuliah di database dengan kode: ".$id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data matakuliah dari database dengan kode: ".$id;
    }
}
