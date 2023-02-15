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
            <button class="btn btn-warning me-md-2" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
            <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
        <div class="card">
          <img src="{{ asset('img/person.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title text-center">Aldi</h3>
            <p class="card-title text-center">Kasir</p>
            <p class="card-title text-center">Aldy Andrian</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <button class="btn btn-warning me-md-2" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
              <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('img/person.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title text-center">Aldi</h3>
            <p class="card-title text-center">Kasir</p>
            <p class="card-title text-center">Aldy Andrian</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <button class="btn btn-warning me-md-2" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
              <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('img/person.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title text-center">Aldi</h3>
            <p class="card-title text-center">Kasir</p>
            <p class="card-title text-center">Aldy Andrian</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <button class="btn btn-warning me-md-2" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
              <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('img/person.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title text-center">Aldi</h3>
            <p class="card-title text-center">Kasir</p>
            <p class="card-title text-center">Aldy Andrian</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <button class="btn btn-warning me-md-2" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
              <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="{{ asset('img/person.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title text-center">Aldi</h3>
            <p class="card-title text-center">Kasir</p>
            <p class="card-title text-center">Aldy Andrian</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <button class="btn btn-warning me-md-2" type="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
              <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="d-flex justify-content-center">
    <nav aria-label="Page navigation example ">
        <ul class="pagination pagination-primary ">
            <li class="page-item"><a class="page-link" href="#">
                    <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                </a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">
                    <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                </a></li>
        </ul>
    </nav>
</div>
    <div class="divider">
      <div class="divider-text">
        ==========
      </div>
    </div>

      <div class="d-grid gap-2">
        <a href="/TambahK" class="btn btn-primary" type="button">Tambah Karyawan</a>
      </div>

      <div class="pt-5">
      <hr>
    </div>     
@endsection