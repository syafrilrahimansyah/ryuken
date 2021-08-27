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
                            <h2 class="card-title">Data Coach</h2>
                        </div>
                        <div class="col-sm-5 offset-1 mt-4">
                            <form class="form-inline" action="/data-coach" method="GET">
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
                                @if ($coaches->count())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Aksi</th>
                                                <th>Nama</th>
                                                <th>Umur</th>
                                                <th>Agama</th>
                                                <th>Sabuk / Geup</th>
                                                <th>Alamat Lengkap</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; ?>
                                            @foreach($coaches as $coach)
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td>
                                                        <a class="badge badge-primary" href="/data-coach/{{ $coach->id }}">detail</a>
                                                        <a class="badge badge-success" href="/edit-data-coach/{{ $coach->id }}">edit</a>
                                                        <a class="badge badge-warning" href="/hapus-data-coach/{{ $coach->id }}" onclick="">hapus</a>
                                                    </td>
                                                    <td>{{ $coach->nama }}</td>
                                                    <td>{{ $coach->umur }}</td>
                                                    <td>{{ $coach->agama }}</td>
                                                    <td>{{ $coach->sabuk }}</td>
                                                    <td>{{ $coach->alamat }}</td>
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