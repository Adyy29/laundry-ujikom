@extends('layouts.main')

@section('content')
    {{-- Search Bar --}}
    <div class="container">
        <form action="/karyawan">
            <div class="input-group mb-3">
                <button class="btn btn-primary" type="submit" id="button-addon1">
                    <i class="fa-solid fa-magnifying-glass"></i> Cari
                </button>
                <input type="text" class="form-control" placeholder="Cari Pengguna"
                    name="search"value="{{ request('search') }}">
            </div>
        </form>
    </div>

    {{-- Kelola Pengguna --}}
    <div class="container">
        <div class="row">
            @foreach ($penggunas as $pengguna)
                <div class="col-md-4">
                    <div class="card">
                        @if ($pengguna->gambar)
                            <img src="{{ asset('/storage/' . $pengguna->gambar) }}" alt="" srcset="">
                        @else
                            <img src="{{ asset('img/person.png') }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="">{{ $pengguna->nama }}</h3>
                                <p class="mb-1">{{ $pengguna->outlet->nama }}</p>
                                <small class="text-muted">{{ $pengguna->level }}</small>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <div class="d-grid gap-2">
                                        <a class="btn btn-warning me-md-2" type="button" href="/karyawan/{{ $pengguna->id }}/edit">
                                            <i class="fa-solid fa-pen-to-square"></i>Edit
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-grid gap-2">
                                        <form action="/karyawan/{{ $pengguna->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="d-grid gap-2">
                                                <form action="/karyawan/{{ $pengguna->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                <button onclick="return confirm('Kamu Yakin?')"
                                                    class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

    {{-- Pagination --}}
    <div class="container">
        <div class="container d-flex justify-content-center">
            {{ $penggunas->links() }}
        </div>
    </div>

    {{-- Divider --}}
    <div class="divider">
        <div class="divider-text">
            ==========
        </div>
    </div>

    {{-- Page Create --}}
    <div class="d-grid gap-2">
        <a href="/karyawan/create" class="btn btn-primary" type="button">
            <i class="fa-solid fa-plus"></i> Tambah Karyawan
        </a>
    </div>
@endsection
