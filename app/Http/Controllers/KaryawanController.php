<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.index',[
            'title' => 'Pengguna',
            'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean',
            'penggunas' => User::latest()->filter()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create',[
            'title' => 'Pengguna',
            'deskripsi' => 'Halaman tambah data pengguna',
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
            'outlet_id' => 'required',
            'level' => 'required',
            'username' => 'required|unique:users|min:5|max:10',
            'password' => 'required',
            'nama' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:20000'
        ]);

        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('post-images');
        }

        $data['password'] = bcrypt($data['password']);

        User::create($data);
        return redirect('/karyawan');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('karyawan.edit',[
            'title' => 'Pengguna',
            'deskripsi' => 'Halaman ubah data pengguna',
            'penggunas' => $user,
            'outlets' => Outlet::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'outlet_id' => 'required',
            'level' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:20000'
        ];


        if($request->username != $user->username) {
            $rules['username'] = 'min:5|max:10|unique:users|required';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if($user->image) {
                Storage::delete($user->image);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/karyawan');
    }
}
