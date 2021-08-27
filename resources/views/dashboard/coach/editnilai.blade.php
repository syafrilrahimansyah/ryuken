@extends('layout/dashboard/coach/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Ryuken Taekwondo Academy</h5>
                            <h2 class="card-title">Edit Nilai Ujian Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div>
                                    <form action="/edit-nilai-ujian/{{ $nilaisiswa->id }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="nama">Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama" class="form-control" placeholder="{{ $nilaisiswa->nama }}" id="nama" value="{{ $nilaisiswa->nama }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="user_id">User ID</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="user_id" class="form-control" placeholder="{{ $nilaisiswa->user_id }}" id="user_id" value="{{ $nilaisiswa->user_id }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="kelas">Kelas</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="kelas" class="form-control" placeholder="{{ $nilaisiswa->kelas }}" id="kelas" value="{{ $nilaisiswa->kelas }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="kyorugi">Kyorugi</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="kyorugi" class="form-control" placeholder="{{ $nilaisiswa->kyorugi }}" id="kyorugi" value="{{ $nilaisiswa->kyorugi }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="poomsae">Poomsae</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="poomsae" class="form-control" placeholder="{{ $nilaisiswa->poomsae }}" id="poomsae" value="{{ $nilaisiswa->poomsae }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="kyukpa">Kyukpa</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="kyukpa" class="form-control" placeholder="{{ $nilaisiswa->kyukpa }}" id="kyukpa" value="{{ $nilaisiswa->kyukpa }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <Label for="sabuk">Naik Ke</Label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="naikke" id="sabuk" class="form-control">
                                                        <?php $i = 1; ?>
                                                    @foreach($belts as $belt)
                                                        <option class="text-dark" {{ ($nilaisiswa->naikke === $belt->belt) ? 'selected' : '' }} value="{{ $belt->belt }}">
                                                            <?= $i; ?>. {{ $belt->belt }}
                                                        </option>
                                                    <?php $i++; ?>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-4 mb-4">
                                            <div class="row">
                                                <div class="col-md-1 offset-4">
                                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                                </div>
                                                <div class="col-md-0 offset-1">
                                                    <a href="/nilai-ujian-siswa" class="btn btn-secondary">Kembali</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection