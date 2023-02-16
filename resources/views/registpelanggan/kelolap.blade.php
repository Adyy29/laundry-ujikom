@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Tabel Pelanggan
        </div>
        <div class="card-tittle">
            <a href="/tambahp" class="btn form-control  bg-primary" style="color: white;margin-left:5%; width: 90%">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item )

                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->hp }}</td>
                        <td>
                            <a href="{{ url('edit-pelanggan', $item->id) }}" class="btn btn-warning mx-auto">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@endsection
