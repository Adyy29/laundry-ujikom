<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('outlet.index', [
            'title' => 'Outlet',
            'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean',
            'outlets' => Outlet::latest()->filter()->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlet.create', [
            'title' => 'Pelanggan',
            'deskripsi' => 'Halaman tambah data outlet'
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
            'jalan' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'kode_pos' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'negara' => 'required',
            'telp' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:20000'
        ]);

        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('post-images');
        }

        Outlet::create($data);
        return redirect('/outlet');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        return view('outlet.edit', [
            'title' => 'Outlet',
            'deskripsi' => 'Halaman ubah data outlet',
            'outlets' => $outlet
        ]);
    }

    public function update(Request $request, Outlet $outlet)
    {

        $rules = [
            'nama' => 'required',
            'jalan' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'kode_pos' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'negara' => 'required',
            'telp' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:20000'
        ];

        $validateData = $request->validate($rules);

        // if ($request->file('gambar')) {
        //     if ($request->oldImage) {
        //         storage::delete($request->oldImage);
        //     }
        //     $validateData['gambar'] = $request->file('gambar')->store('post-images');
        // }

        if ($request->file('gambar')) {
            if ($outlet->gambar) {
                Storage::delete($outlet->gambar);
            }
            $validateData['gambar'] = $request->file('gambar')->store('post-images');
        }

       Outlet::where('id', $outlet->id)->update($validateData);
        return redirect('/outlet');
    }

    public function destroy(Outlet $outlet)
    {
        Outlet::destroy($outlet->id);
        return redirect('/outlet');
    }
}
