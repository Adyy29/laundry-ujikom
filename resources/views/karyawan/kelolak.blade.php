@extends('layouts.main')

@section('content')
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="San Francisco">
  <option value="New York">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
</datalist>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="{{ asset('img/person.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title text-center">Aldi</h3>
          <p class="card-title text-center">Kasir</p>
          <p class="card-title text-center">Aldy Andrian</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a href="#" class="btn btn-warning me-md-2" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
          </div>
        </div>
      </div>
    </div>
</div>
      <div class="divider">
          <div class="divider-text">
        ==========
      </div>
    </div>

      <div class="">
        <a href="/TambahK" class="btn btn-primary form-control" type="button">Tambah Karyawan</a>
      </div>

@endsection
