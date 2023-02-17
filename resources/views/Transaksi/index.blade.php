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
                    <button  class="btn btn-success me-5">
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
                            <td>Insan Permata</td>
                            <td>Aldi</td>
                            <td>Meledak</td>
                            <td>Mirza</td>
                            <td>8725382602</td>
                            <td>17/02/2023</td>
                            <td>18/02/2023</td>
                            <td>17.00 WIB</td>
                            <td>Rp.5.599,00</td>
                            <td>Rp.500.000,00</td>
                            <td>
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-success">Selesai</button>
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

