<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{
    public function pelanggantambah(Request $request)
    {
        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
        ]);

        return redirect('/pelanggan');
    }
    public function outlet(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'nama_jalan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kode_pos' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'hp' => 'required',
            'gambar' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:20000'
        ]);

        $file = $request->file('gambar');

        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'post_images';
		$file->move($tujuan_upload,$nama_file);
        // if ($request->file('gambar')) {
        //     $data['gambar'] = $request->file('gambar')->store('public/post-images');
        // }
        Outlet::create([
            'nama' => $request->nama,
            'nama_jalan' => $request->nama_jalan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kode_pos' => $request->kode_pos,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'hp' => $request->hp,
            'gambar' => $nama_file,
        ]);

        return redirect('/outlet');
    }

    public function pelanggan($id)
    {
        $data = Pelanggan::findorfail($id);
        return view('registpelanggan.edit-tambahp', compact('data'),[
            'title' => 'Pelanggan',
            'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean'
        ]);
    }
    public function update(Request $request, $id){
        $data = pelanggan::findorfail($id);
        $data->update($request->all());
        return redirect('/pelanggan');
    }
    public function Outlet1($id)
    {
        $data = Outlet::findorfail($id);
        return view('outlet.edit-tambaho', compact('data'),[
            'title' => 'Outlet',
            'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean'
        ]);
    }
    public function update1(Request $request, $id){
        $data1 = Outlet::findorfail($id);
        // $data->update($request->all());
        $data = [
            'gambar' => 'image|file|max:20000',
            'nama' => 'required',
            'nama_jalan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kode_pos' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'hp' => 'required',
        ];

        $validateData = $request->validate($data);

        // if ($request->file('gambar')) {
        //     if ($request->oldImage) {
        //         storage::delete($request->oldImage);
        //     }
        //     $validateData['gambar'] = $request->file('gambar')->store('post-images');
        // }
        Outlet::where('id', $data1->id)->update($validateData);

        return redirect('/outlet');
    }
}
