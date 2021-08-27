@extends('layout/dashboard/admin/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8 text-left">
                            <h5 class="card-category">Ryuken Taekwondo Academy</h5>
                            <h2 class="card-title">Detail Data Coach</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h5 class="card-title">{{ $coach->nama }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $coach->no_tlp }}</h6>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Tempat Lahir</th>
                                            <td>{{ $coach->tmpt_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Lahir</th>
                                            <td>{{ $coach->tgl_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td>{{ $coach->jkel }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Umur</th>
                                            <td>{{ $coach->umur }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Agama</th>
                                            <td>{{ $coach->agama }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Alamat</th>
                                            <td>{{ $coach->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sabuk</th>
                                            <td>{{ $coach->sabuk }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">About Me</th>
                                            <td>{{ $coach->aboutme }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Published At</th>
                                            <td>{{ $coach->published_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/data-coach" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection