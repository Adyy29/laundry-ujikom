@extends('layouts.main')

@section('content')
    {{-- Search Bar --}}
    <div class="container">
        <form action="">
            <div class="form-group position-relative has-icon-left">
                <input type="text" class="form-control" placeholder="Cari Outlet">
                <div class="form-control-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </form>
    </div>

    {{-- List Outlet --}}
    <div class="container text-center">
        <div class="row">
            @foreach ($data as $item)
            <table class="col-md-5 mx-auto" >
            <tr>
                <td>
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-tittle">
                        <img class="card-img-top img-fluid" src="{{ asset('/post_images'. $item->gambar) }}"
                        style="height: 20rem" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $item->nama }}</h4>
                            <p class="card-text">
                                {{ $item->nama_jalan }} {{ $item->rt }} {{ $item->rw }} {{ $item->kecamatan }} {{ $item->kabupaten }} {{ $item->provinsi }} {{ $item->kode_pos }}
                            </p>
                            <div class="row">
                                <div class="col-lg-8 my-1">
                                    <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalCenter{{ $item->id }}" aria-controls="exampleModalCenter">
                                            Launch Modal
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-2 my-1">
                                    <div class="d-grid gap-2">
                                        <a href="{{ url('edit-outlet', $item->id) }}" class="btn btn-warning">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-2 my-1">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </td>




    {{-- Modal --}}
    <div class="modal fade" id="exampleModalCenter{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{ $item->nama }}
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        {{ $item->nama_jalan }} {{ $item->rt }} {{ $item->rw }} {{ $item->kecamatan }} {{ $item->kabupaten }} {{ $item->provinsi }} {{ $item->kode_pos }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                </div>
            </tr>
            @endforeach
        </div>
    </div>
</table>
  {{-- Pagination --}}
  <div class="container d-flex justify-content-center">
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-primary">
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
    {{-- Divider --}}
    <div class="divider">
        <div class="divider-text">
            ===========
        </div>
    </div>

        {{-- Create Page --}}
    </div>
    <div class="container">
        <div class="d-grid gap-2">
            <a href="/tambahoutlet" class="btn btn-primary form-control">
                <i class="fa-solid fa-plus"></i> Tambah Outlet
            </a>
        </div>
    </div>

@endsection
