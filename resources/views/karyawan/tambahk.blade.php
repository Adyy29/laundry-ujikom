@extends('layouts.main')

@section('content')

<div class="">
    <p>Nama Lengkap</p>
    <input class="form-control form-control-lg" name="nama" type="text" required placeholder="Isi Disini" aria-label="Isi Disini example">

    <p class="pt-4">Outlet Bekerja</p>
    <select class="form-select form-control-lg" name="outlet" id="cars" required>
        <option value="volvo">cabang 1</option>
        <option value="saab">cabang 2</option>
        <option value="mercedes">cabang 3</option>
        <option value="audi">cabang4</option>
      </select>

      <p class="pt-4">Gambar</p>
      <input class="form-control form-control-lg" name="gambar" required id="formFileLg" type="file">
    <p class="pt-4">Username</p>
    <input class="form-control form-control-lg" name=""  type="text" placeholder="Isi Disini" aria-label="Isi Disini example">
    <p class="pt-4">Password</p>
    <input class="form-control form-control-lg" name=""  type="text" placeholder="Isi Disini" aria-label="Isi Disini example">

    <p class="pt-4">Role</p>
    <select class="form-select form-control-lg" name="outlet" id="cars">
        <option value="volvo">admin</option>
        <option value="saab">karyawan</option>
        <option value="mercedes">Kasir</option>
      </select>


      <div class="row align-items-center pt-5 pb-5">
        <div class="col ">
            <button href="" class="btn btn-primary form-control" type="submit">Submit</button>
        </div>
        <div class="col ">
            <button class="btn btn-secondary form-control" type="submit">Reset</button>
        </div>

      </div>

</div>
@endsection
