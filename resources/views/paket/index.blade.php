@extends('layouts.main')

@section('content')
    {{-- Tabel --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                 List Tabel Paket
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Jenis Cucian</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Meledak</td>
                            <td>Kiloan</td>
                            <td>20000</td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="d-grid gap-2">
                                            <a href="/paket/edit" class="btn btn-warning">
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
            <a href="/paket/create" class="btn form-control bg-primary">
                <i class="fa-solid fa-plus"></i> Tambah
            </a>
        </div>
    </div>
@endsection
