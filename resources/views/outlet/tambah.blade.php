@extends('layouts.main')

@section('content')
<form class="row g-3">
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Nama Lengkap</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    
    <div class="col-4">
      <label for="inputAddress" class="form-label">Tanggal Laporan</label>
      <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-4">
      <label for="inputAddress2" class="form-label">Waktu Laporan</label>
      <input type="time" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-4">
      <label for="inputCity" class="form-label">Keuntungan kotor</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Rp.00.000,00">
    </div>
    <div class="col-md-4">
        <label for="inputCity" class="form-label">Keuntungan Bersih</label>
        <input type="text" class="form-control" id="inputCity" placeholder="Rp.00.000,00">
      </div>
    <div class="col-md-4">
      <label for="inputZip" class="form-label">Total Order</label>
      <input type="text" class="form-control" id="inputZip" placeholder="">
    </div>
    <div class="col-md-4">
        <label for="inputZip" class="form-label">Total Pendapatan Hari ini</label>
        <input type="text" class="form-control" id="inputZip" placeholder="Rp.00.000,00">
      </div>
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="col-md-12 pt-3 pb-4 text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>


@endsection
