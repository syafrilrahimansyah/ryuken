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
                            <h2 class="card-title">Detail Data Pendaftaran</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h5 class="card-title">{{ $registration->nama }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $registration->no_tlp }}</h6>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Tempat Lahir</th>
                                            <td>{{ $registration->tmpt_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Lahir</th>
                                            <td>{{ $registration->tgl_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td>{{ $registration->jkel }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Umur</th>
                                            <td>{{ $registration->umur }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Agama</th>
                                            <td>{{ $registration->agama }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Alamat</th>
                                            <td>{{ $registration->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tempat Latihan</th>
                                            <td>{{ $registration->tmpt_latihan }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sabuk</th>
                                            <td>{{ $registration->sabuk }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Riwayat Penyakit</th>
                                            <td>{{ $registration->rw_penyakit }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Berat Badan</th>
                                            <td>{{ $registration->beratbadan }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Published At</th>
                                            <td>{{ $registration->published_at }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sertifikat</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Bukti Pembayaran</th>
                                            <td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="/data-pendaftaran" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection