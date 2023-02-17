@extends('layouts.main')


@section('content')
    {{-- Tabel Pelanggan --}}
    <div class="container">
        <div class="card">
            <div class="card-header">
                Tabel Pelanggan
            </div>
            <div class="col-lg-12  text-end">
                <div class="d-grid gap-2 mb-2">
                    <form action="" method="post">
                        @csrf
                    <button  class="btn btn-danger me-5">
                        Unduh
                    </button>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama Outlet</th>
                            <th>Nama Kasir</th>
                            <th>Paket</th>
                            <th>Nama Pelanggan</th>
                            <th>Kode Invoice</th>
                            <th>Tanggal</th>
                            <th>Tanggal Bayar</th>
                            <th>Batas Waktu</th>
                            <th>Pajak</th>
                            <th>Total Biaya</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                            {{-- @foreach ($pelanggans as $pelanggan ) --}}
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>0</td>
                            <td>11</td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="d-grid gap-2">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-grid gap-2 mb-2">

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Create Page --}}
    <div class="container">
        <div class="d-grid gap-2">
            <a href="/Transaksi/create" style="color:white;" class="btn form-control bg-primary">
                <i class="fa-solid fa-plus"></i> Tambah
            </a>
        </div>
    </div>
@endsection

