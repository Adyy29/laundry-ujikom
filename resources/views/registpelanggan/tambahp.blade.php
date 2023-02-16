@extends('layouts.main')

@section('content')
<form class="row g-3">
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Nama Lengkap</label>
      <input type="email" name="" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="col-md-12">
      <label for="inputPassword4" class="form-label">No Hp</label>
      <input type="number" name="" class="form-control" id="inputPassword4" placeholder="+62">
    </div>
      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
          <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3" placeholder="Text"></textarea>
        </div>
        <div class="col-md-12 pt-3 pb-4 text-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>


@endsection
