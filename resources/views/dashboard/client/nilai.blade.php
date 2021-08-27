@extends('layout/dashboard/client/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Ryuken Taekwondo Academy</h5>
                            <h2 class="card-title">Nilai Ujian</h2>
                        </div>
                        <div class="col-sm-5 offset-1 mt-4">
                            <form class="form-inline" action="/nilai-siswa" method="GET">
                                <label class="sr-only float-right " for="inlineFormInputName2">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="masukkan keyword pencaharian" name="keyword" value="{{ request('keyword') }}">
                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                @if ($nilaisiswas->count())
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Kyorugi</th>
                                            <th>Poomsae</th>
                                            <th>Kyukpa</th>
                                            <th>Naik Ke</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            @foreach($nilaisiswas as $nilaisiswa)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $nilaisiswa->nama }}</td>
                                                <td>{{ $nilaisiswa->kelas }}</td>
                                                <td>{{ $nilaisiswa->kyorugi }}</td>
                                                <td>{{ $nilaisiswa->poomsae }}</td>
                                                <td>{{ $nilaisiswa->kyukpa }}</td>
                                                <td>{{ $nilaisiswa->naikke }}</td>
                                            </tr>
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