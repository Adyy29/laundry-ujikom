<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Outlet;
use App\Models\Pelanggan;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paket.index', [
            'title' => 'Paket',
            'deskripsi' => 'Halaman pengelolaan paket sistem kasir Dry and Clean',
            'pakets' => Paket::all(),
            // latest()->filter()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.create', [
            'title' => 'Paket',
            'deskripsi' => 'Halaman tambah data paket',
            'outlets' => Outlet::all()
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
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama' => 'required',
            'harga' => 'required',
        ]);

        Paket::create($data);
        return redirect('/paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit(Paket $paket)
    {
        return view('paket.edit', [
            'title' => 'Pelanggan',
            'deskripsi' => 'Halaman ubah data paket',
            'pakets' => $paket,
            'outlets' => Outlet::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        $rules = [
            'id_outlet' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
        ];

        $validateData = $request->validate($rules);

        Paket::where('id', $paket->id)->update($validateData);
        return redirect('/paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        Paket::destroy($paket->id);
        return redirect('/paket');
    }
}
