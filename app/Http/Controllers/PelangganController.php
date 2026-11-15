<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $data['dataPelanggan'] = Pelanggan::all();
        return view('admin.pelanggan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = ([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:pelanggan,email',
            'phone' => 'required|numeric|unique:pelanggan,phone',
        ]);

        $messages = [
            'first_name.required' => 'Nama depan wajib diisi!',
            'last_name.required'  => 'Nama belakang wajib diisi!',
            'birthday.required'   => 'Tanggal lahir tidak boleh kosong!',
            'birthday.date'       => 'Format tanggal lahir tidak valid!',
            'gender.required'     => 'Jenis kelamin harus dipilih!',
            'gender.in'           => 'Pilihan jenis kelamin tidak valid!',
            'email.required'      => 'Alamat email wajib diisi!',
            'email.email'         => 'Format email tidak valid!',
            'email.unique'        => 'Email ini sudah digunakan oleh pelanggan lain!',
            'phone.required'      => 'Nomor telepon wajib diisi!',
            'phone.numeric'       => 'Nomor telepon harus berupa angka!',
            'phone.unique'        => 'Nomor telepon ini sudah terdaftar!',
        ];
        // $data['first_name'] = $request->first_name;
        // $data['last_name'] = $request->last_name;
        // $data['birthday'] = $request->birthday;
        // $data['gender'] = $request->gender;
        // $data['email'] = $request->email;
        // $data['phone'] = $request->phone;

        $validated = $request->validate($data, $messages);

        Pelanggan::create($validated);

        return redirect()->route('pelanggan.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(?string $param1 = null) {}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataPelanggan'] = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', $data);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelanggan_id = $id;
        $pelanggan = Pelanggan::findOrFail($pelanggan_id);

        $dataPelanggan = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'email' => 'required|email|unique:pelanggan,email,' . $pelanggan_id . ',pelanggan_id',
            'phone' => 'required|numeric|unique:pelanggan,phone,' . $pelanggan_id . ',pelanggan_id',
        ], [
            'first_name.required' => 'Nama depan wajib diisi!',
            'last_name.required'  => 'Nama belakang wajib diisi!',
            'birthday.required'   => 'Tanggal lahir tidak boleh kosong!',
            'birthday.date'       => 'Format tanggal lahir tidak valid!',
            'gender.required'     => 'Jenis kelamin harus dipilih!',
            'gender.in'           => 'Pilihan jenis kelamin tidak valid!',
            'email.required'      => 'Alamat email wajib diisi!',
            'email.email'         => 'Format email tidak valid!',
            'email.unique'        => 'Email ini sudah digunakan oleh pelanggan lain!',
            'phone.required'      => 'Nomor telepon wajib diisi!',
            'phone.numeric'       => 'Nomor telepon harus berupa angka!',
            'phone.unique'        => 'Nomor telepon ini sudah terdaftar!',
        ]);
        // $pelanggan->first_name = $request->first_name;
        // $pelanggan->last_name = $request->last_name;
        // $pelanggan->birthday = $request->birthday;
        // $pelanggan->gender = $request->gender;
        // $pelanggan->email = $request->email;
        // $pelanggan->phone = $request->phone;

        $pelanggan->save($dataPelanggan);
        return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Penghapusan Data Berhasil!');
    }
}
