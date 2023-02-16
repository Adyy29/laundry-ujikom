@extends('layouts.main')

@section('content')
    {{-- Tabel Pelanggan --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tabel Pelanggan
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Aldi Andrian</td>
                            <td>Bandung</td>
                            <td>085624507658</td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="d-grid gap-2">
                                            <a href="/pelanggan/edit" class="btn btn-warning">
                                                Edit
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-grid gap-2 mb-2">
                                            <button class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Create Page --}}
    <div class="container">
        <div class="d-grid gap-2">
            <a href="/pelanggan/create" style="color:white;" class="btn form-control bg-primary">
                <i class="fa-solid fa-plus"></i> Tambah
            </a>
        </div>
    </div>
@endsection
