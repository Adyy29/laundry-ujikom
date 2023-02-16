@extends('layouts.main')

@section('content')
    {{-- Form --}}
    <div class="card-content">
        <div class="card-body">

            <form class="form form-vertical" method="" action="/karyawan/store">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Nama Lengkap</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="fname"
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-vertical">level</label>
                                <select name="" id="" class="form-select">
                                    <option value="kasir">Kasir</option>
                                    <option value="admin">Admin</option>
                                    <option value="owner">Owner</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email-id-vertical">Penempatan</label>
                                <select name="" id="" class="form-select">
                                    <option value="kasir">Laundry 1</option>
                                    <option value="admin">Laundry 2</option>
                                    <option value="owner">Laundry 3</option>
                                </select>
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
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password-vertical">Username</label>
                                <input type="text" id="password-vertical" class="form-control" name="contact"
                                    placeholder="Masukkan Username">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password-vertical">Password</label>
                                <input type="password" id="password-vertical" class="form-control" name="contact"
                                    placeholder="Masukkan Username">
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
