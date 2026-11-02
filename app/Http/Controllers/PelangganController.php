<?php
<<<<<<< HEAD
=======

>>>>>>> fcf94b05cf49e463fbb5e660db914a1bfe333d79
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     */
=======
>>>>>>> fcf94b05cf49e463fbb5e660db914a1bfe333d79
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
<<<<<<< HEAD
        //dd($request->all());
        $data['first_name'] = $request->first_name;
		$data['last_name'] = $request->last_name;
		$data['birthday'] = $request->birthday;
		$data['gender'] = $request->gender;
		$data['email'] = $request->email;
		$data['phone'] = $request->phone;
		
		Pelanggan::create($data);
		
		return redirect()->route('pelanggan.index')->with('success','Penambahan Data Berhasil!');
=======
        // dd($request->all());
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        Pelanggan::create($data);

        return redirect()->route('pelanggan.index')->with('success', 'Penambahan Data Berhasil!');
>>>>>>> fcf94b05cf49e463fbb5e660db914a1bfe333d79
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(string $id)
    {
        //
    }
=======
    public function show(?string $param1 = null) {}

>>>>>>> fcf94b05cf49e463fbb5e660db914a1bfe333d79

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(string $id)
{
    $data['dataPelanggan'] = Pelanggan::findOrFail($id);
    return view('admin.pelanggan.edit', $data);
}
=======
    public function edit(string $param1) {}
>>>>>>> fcf94b05cf49e463fbb5e660db914a1bfe333d79

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, string $id)
    {
        $pelanggan_id = $id;
        $pelanggan = Pelanggan::findOrFail($pelanggan_id);

        $pelanggan->first_name = $request->first_name;
        $pelanggan->last_name = $request->last_name;
        $pelanggan->birthday = $request->birthday;
        $pelanggan->gender = $request->gender;
        $pelanggan->email = $request->email;
        $pelanggan->phone = $request->phone;

        $pelanggan->save();
        return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
    }
=======
    public function update(Request $request, string $id) {}
>>>>>>> fcf94b05cf49e463fbb5e660db914a1bfe333d79

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus');
    }
=======
    public function destroy(string $id) {}
>>>>>>> fcf94b05cf49e463fbb5e660db914a1bfe333d79
}
