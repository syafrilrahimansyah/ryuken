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
                            <h2 class="card-title">Data Pendaftaran</h2>
                        </div>
                        <div class="col-sm-5 offset-1 mt-4">
                            <form class="form-inline" action="/data-pendaftaran" method="GET">
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
                                @if ($registrations->count())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Aksi</th>
                                                <th>Nama</th>
                                                <th>ID</th>
                                                <th>Tempat Latihan</th>
                                                <th>Sabuk / Geup</th>
                                                <th>Published At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach($registrations as $registration)
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td>
                                                        <a class="badge badge-primary" href="/data-pendaftaran/{{ $registration->id }}">detail</a>
                                                        <a class="badge badge-success" href="/edit-data-pendaftaran/{{ $registration->id }}">edit</a>
                                                        <a class="badge badge-warning" href="/hapus-data-pendaftaran/{{ $registration->id }}" onclick="">hapus</a>
                                                    </td>
                                                    <td>{{ $registration->nama }}</td>
                                                    <td>{{ $registration->id }}</td>
                                                    <td>{{ $registration->tmpt_latihan }}</td>
                                                    <td>{{ $registration->sabuk }}</td>
                                                    <td>{{ $registration->published_at }}</td>
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