@extends('layout/dashboard/admin/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Ryuken Taekwondo Academy</h5>
                            <h2 class="card-title">Data Jadwal Latihan</h2>
                        </div>
                        <div class="col-sm-5 offset-1 mt-4">
                            <form class="form-inline" action="/data-jadwal-latihan" method="GET">
                                <input type="text" class="form-control mb-2 mr-sm-2 col-md-7" id="inlineFormInputName2" placeholder="Masukkan keyword pencarian.." name="keyword" value="{{ request('keyword') }}">
                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                            </form>
                        </div>
                        <div class="container">
                            <a href="/tambah-data-jadwal" class="btn btn-outline-primary">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="">
                                @include('dashboard/partials/session')
                                @if ($schedules->count())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Aksi</th>
                                                <th>Nama Pelatih</th>
                                                <th>Nama Sekolah</th>
                                                <th>Alamat Sekolah</th>
                                                <th>Hari</th>
                                                <th>Jam</th>
                                                <th>Published At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                            @foreach($schedules as $schedule)
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td>
                                                        <a class="badge badge-success" href="/edit-data-jadwal/{{ $schedule->id }}">edit</a>
                                                        <a class="badge badge-warning" href="/hapus-data-jadwal/{{ $schedule->id }}" onclick="">hapus</a>
                                                    </td>
                                                    <td>{{ $schedule->nama_pelatih }}</td>
                                                    <td>{{ $schedule->nama_sekolah }}</td>
                                                    <td>{{ $schedule->alamat_sekolah }}</td>
                                                    <td>{{ $schedule->hari }}</td>
                                                    <td>{{ $schedule->jam }}</td>
                                                    <td>{{ $schedule->published_at }}</td>
                                                </tr>
                                            <?php $i++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text-center fs-4">Data not found.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection