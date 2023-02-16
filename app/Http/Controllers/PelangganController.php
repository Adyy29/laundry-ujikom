<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan.index', [
            'title' => 'Pelanggan',
            'deskripsi' => 'Halaman pengelolaan pelanggan sistem kasir Dry and Clean',
            'pelanggans' => Pelanggan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create', [
            'title' => 'Pelanggan',
            'deskripsi' => 'Halaman penambahan data pelanggan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
        ]);

        Pelanggan::create($data);
        return redirect('/pelanggan');
    }
    public function show($id)
    {
        //
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.edit', [
            'title' => 'Pelanggan',
            'deskripsi' => 'Halaman ubah data pelanggan',
            'pelanggans' => $pelanggan
        ]);
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $rules = [
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
        ];

        $validateData = $request->validate($rules);

        Pelanggan::where('id', $pelanggan->id)->update($validateData);
        return redirect('/pelanggan');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        Pelanggan::destroy($pelanggan->id);
        return redirect('/pelanggan');
    }
}
