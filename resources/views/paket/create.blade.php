@extends('layouts.main')

@section('content')
    <div class="card-content">
        <div class="card-body">

            <form class="form form-vertical" method="" action="/karyawan/store">
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">Laundry Penyedia Paket</label>
                                        <select name="" id="" class="form-select">
                                            @foreach ($outlets as $outlet)
                                                <option value="{{ $outlet->id }}">{{ $outlet->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Nama Paket</label>
                                <input type="text" id="first-name-vertical" class="form-control" name="fname"
                                    placeholder="Masukkan Nama Paket">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Jenis Paket</label>
                                <select name="" id="" class="form-select">
                                    <option value="Kiloan">Kiloan</option>
                                    <option value="Selimut">Selimut</option>
                                    <option value="Bedcover">Bedcover</option>
                                    <option value="Kaos">Kaos</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-vertical">Harga Paket</label>
                                <input type="number" id="first-name-vertical" class="form-control" name="fname"
                                    placeholder="Masukkan Harga Paket">
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
