@extends('layouts.main')

@section('content')
<form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nama Outlet</label>
      <select name="id_outlet" id="" class="form-select">
        @foreach ($outlets as $outlet)
            <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
        @endforeach
    </select>
    </div>
    <div class="col-6">
        <label for="inputAddress2" class="form-label">Nama Kasir</label>
        <select name="id_user" id="" class="form-select">
          {{-- @foreach ($outlets as $outlet)
              <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
          @endforeach --}}
      </select>
      </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Paket</label>
      <select name="id_paket" id="" class="form-select">
        {{-- @foreach ($outlets as $outlet)
            <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
        @endforeach --}}
    </select>
    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Nama Pelanggan</label>
      <select name="id_pelanggan" id="" class="form-select">
        {{-- @foreach ($outlets as $outlet)
            <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
        @endforeach --}}
    </select>
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Kode Invoice</label>
      <input type="number" placeholder="3246298149" name="kode_invoice" class="form-control" id="inputCity">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Tanggal</label>
        <input type="date" name="" class="form-control" id="inputCity">
      </div>
    <div class="col-md-6">
      <label for="inputZip" class="form-label">Tanggal Bayar</label>
      <input type="date" class="form-control" id="inputZip" placeholder="">
    </div>
    <div class="col-md-6">
        <label for="inputZip" class="form-label">Batas Waktu</label>
        <input type="time" class="form-control" id="inputZip">
      </div>
      <div class="col-md-6">
          <label for="exampleFormControlTextarea1" class="form-label">pajak</label>
          <input type="text" class="form-control" placeholder="Rp.5.000,00" name="" id="exampleFormControlTextarea1" rows="3">
        </div>
      <div class="col-md-6">
          <label for="exampleFormControlTextarea1" class="form-label">Total Biaya</label>
          <input type="number" class="form-control" placeholder="Rp.5.000,00" name="" id="exampleFormControlTextarea1" rows="3">
        </div>
        <div class="col-md-12">
            <label for="exampleFormControlTextarea1" class="form-label">Status</label>
            <select name="id_user" id="" class="form-select">
                {{-- @foreach ($outlets as $outlet)
                    <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
                @endforeach --}}
            </select>
          </div>
        <div class="col-md-12 pt-3 pb-4 text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    @endsection
