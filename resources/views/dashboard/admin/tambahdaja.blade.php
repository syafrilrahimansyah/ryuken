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
                            <h2 class="card-title">Tambah Data Jadwal Latihan</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="">
                                <div>
                                <form action="/tambah-data-jadwal" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="nama">Nama Pelatih</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="nama_pelatih" class="form-control" placeholder="Masukkan Nama Pelatih" id="nama">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <Label for="sekolah">Nama Sekolah</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="nama_sekolah" id="sekolah" class="form-control">
                                                    <?php $i = 1; ?>
                                                    @foreach($dojangs as $dojang)
                                                        <option class="text-dark" value="{{ $dojang->nama_dojang }}"><?= $i; ?>. {{ $dojang->nama_dojang }}</option>
                                                        <?php $i++; ?>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <Label for="alamat">Alamat Sekolah</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="alamat_sekolah" id="alamat" class="form-control">
                                                    <?php $i = 1; ?>
                                                    @foreach($dojangs as $dojang)
                                                        <option class="text-dark" value="{{ $dojang->alamat_dojang }}"><?= $i; ?>. {{ $dojang->alamat_dojang }}</option>
                                                        <?php $i++; ?>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <Label for="hari">Hari</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="hari" id="hari" class="form-control">
                                                    <?php $i = 1; ?>
                                                    @foreach($days as $day)
                                                        <option class="text-dark" value="{{ $day->day }}"><?= $i; ?>. {{ $day->day }}</option>
                                                        <?php $i++; ?>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="jam">Jam</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="jam" class="form-control" placeholder="Masukkan Jam Latihan" id="jam">
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
                                                <a href="/data-jadwal-latihan" class="btn btn-secondary">Kembali</a>
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