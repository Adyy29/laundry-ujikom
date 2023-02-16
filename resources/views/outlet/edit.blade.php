@extends('layouts.main')

@section('content')
    {{-- Form --}}
    <div class="card-content">
        <div class="card-body">

            <form class="form form-vertical" method="post" action="/outlet/{{ $outlets->id }}">
                @method('put')
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Nama Outlet</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="fname"
                                    placeholder="Masukkan Nama Outlet">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">No Telepon</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="fname"
                                    placeholder="Masukkan No Telepon">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-vertical">Pratinjau Gambar</label>
                                <div class="container border mt-2 py-3 d-flex justify-content-center">
                                    <img src="{{ asset('img/laundry-2.jpg') }}" alt="" width="400px">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contact-info-vertical">Gambar</label>
                                <input type="file" name="image" class="imgbb-filepond">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Nama Jalan</label>
                                    <input type="text" id="first-name-column" class="form-control"
                                        placeholder="Masukkan Nama Jalan" name="fname-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Rukun tetangga</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Masukkan No RT"
                                        name="lname-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Rukun Warga</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Masukkan No RW"
                                        name="city-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Kecamatan</label>
                                    <input type="text" id="country-floating" class="form-control" name="country-floating"
                                        placeholder="Masukkan Kecamatan">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Kabupaten</label>
                                    <input type="text" id="company-column" class="form-control" name="company-column"
                                        placeholder="Masukkan Kabupaten / Kota">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Provinsi</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                        placeholder="Masukkan Provinsi">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Negara</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                        placeholder="Masukkan Negara">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Kode POS</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                        placeholder="Masukkan Kode POS">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
