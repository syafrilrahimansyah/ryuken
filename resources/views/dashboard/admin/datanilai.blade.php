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
                            <h2 class="card-title">Data Nilai Siswa</h2>
                        </div>
                        <div class="col-sm-5 offset-1 mt-4">
                            <form class="form-inline" action="/data-nilai-siswa" method="GET">
                                <input type="text" class="form-control mb-2 mr-sm-2 col-md-7" id="inlineFormInputName2" placeholder="Masukkan keyword pencarian.." name="keyword" value="{{ request('keyword') }}">
                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('dashboard/partials/session')
                                @if ($nilaisiswas->count())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Aksi</th>
                                                <th>Nama</th>
                                                <th>User ID</th>
                                                <th>Kelas</th>
                                                <th>Kyorugi</th>
                                                <th>Poomsae</th>
                                                <th>Kyukpa</th>
                                                <th>Naik Ke</th>
                                                <th>Published At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                            @foreach($nilaisiswas as $nilaisiswa)
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td>
                                                        <a class="badge badge-success" href="/edit-data-nilai/{{ $nilaisiswa->id }}">edit</a>
                                                        <a class="badge badge-warning" href="/hapus-data-nilai/{{ $nilaisiswa->id }}" onclick="">hapus</a>
                                                    </td>
                                                    <td>{{ $nilaisiswa->nama }}</td>
                                                    <td>{{ $nilaisiswa->user_id }}</td>
                                                    <td>{{ $nilaisiswa->kelas }}</td>
                                                    <td>{{ $nilaisiswa->kyorugi }}</td>
                                                    <td>{{ $nilaisiswa->poomsae }}</td>
                                                    <td>{{ $nilaisiswa->kyukpa }}</td>
                                                    <td>{{ $nilaisiswa->naikke }}</td>
                                                    <td>{{ $nilaisiswa->published_at }}</td>
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