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
                            <h2 class="card-title">Tambah Nilai Ujian Siswa</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('dashboard/partials/session')
                                <div>
                                    <form action="/tambah-nilai-ujian" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="nama">Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Siswa" id="nama" value="{{ old('nama') }}" required>
                                                </div>
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="regis_id">User ID</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div>
                                                    <input type="number" name="user_id" class="form-control" placeholder="Masukkan User ID Siswa" id="regis_id" value="{{ old('user_id') }}" required>
                                                    </div>
                                                    <div class="">
                                                        <small>User ID tidak boleh salah.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="kelas">Kelas</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas Siswa" id="kelas" value="{{ old('kelas') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="kyorugi">Kyorugi</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="kyorugi" class="form-control" placeholder="Masukkan Nilai Kyorugi Siswa" id="kyorugi" value="{{ old('kyorugi') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="poomsae">Poomsae</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="poomsae" class="form-control" placeholder="Masukkan Nilai Poomsae Siswa" id="poomsae" value="{{ old('poomsae') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="kyukpa">Kyukpa</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="kyukpa" class="form-control" placeholder="Masukkan Nilai Kyukpa Siswa" id="kyukpa" value="{{ old('kyukpa') }}" required>
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
                                                        <option class="text-dark" value="{{ $belt->belt }}">
                                                            <?= $i; ?>. {{ $belt->belt }}
                                                        </option>
                                                    <?php $i++; ?>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="hidden" name="published_at" value="{{ $date }}">
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