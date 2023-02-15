@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Tabel Pelanggan
        </div>
        <div class="card-tittle">
            <a href="/tambahp" class="btn form-control  bg-primary" style="color: white;margin-left:5%; width: 90%">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Inactive</span>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Inactive</span>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Aldi Andrian</td>
                        <td>Bandung</td>
                        <td>085624507658</td>
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
