@extends('layouts.main')

@section('content')
    <form action="/tambahoutlet" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <p>Nama Outlet</p>
            <input class="form-control form-control-lg" name="nama" type="text" required placeholder="Isi Disini"
                aria-label="Isi Disini example">

            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Nama Jalan</label>
                <input type="text" class="form-control" name="nama_jalan" id="inputPassword4" placeholder="Jl.pergi">
            </div>
            <div class="col-2">
                <label for="inputAddress" class="form-label">RT</label>
                <input type="number" class="form-control" name="rt" id="inputAddress" placeholder="123">
            </div>
            <div class="col-2">
                <label for="inputAddress" class="form-label">RW</label>
                <input type="number" class="form-control" name="rw" id="inputAddress" placeholder="123">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Kode Pos</label>
                <input type="number" class="form-control" name="kode_pos" id="inputCity" placeholder="123">
            </div>
            <div class="col-4">
                <label for="inputAddress2" class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi" id="inputAddress2" placeholder="Provinsi">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Kabupaten</label>
                <input type="text" class="form-control" name="kabupaten" id="inputCity" placeholder="Kabupaten">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" id="inputCity" placeholder="Kecamatan">
            </div>

            <label for="gambar" class="form-label">Gambar</label>
            <input class="form-control" name="gambar" id="gambar" required type="file" onchange="previewImage()">
            <div class="img-preview img-fluid">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <label for="inputCity" class="form-label">Telepon</label>
            <input type="number" name="hp" class="form-control" id="inputCity" placeholder="+62">

            <div class="row align-items-center pt-5 pb-5">
                <div class="col ">
                    <button class="btn btn-primary form-control" type="submit">Submit</button>
                </div>
                <div class="col ">
                    <button class="btn btn-secondary form-control" type="submit">Reset</button>
                </div>

            </div>

        </div>
    </form>
    <script>
        function previewImage() {
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
