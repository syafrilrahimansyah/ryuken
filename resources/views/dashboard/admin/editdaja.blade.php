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
                            <h2 class="card-title">Edit Data Jadwal Latihan</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="">
                                <div>
                                <form action="/edit-data-jadwal/{{ $schedule->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="nama">Nama Pelatih</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="nama_pelatih" class="form-control" placeholder="{{ $schedule->nama_pelatih }}" id="nama" value="{{ $schedule->nama_pelatih }}">
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
                                                        <option class="text-dark" {{ ($schedule->nama_sekolah === $dojang->nama_dojang) ? 'selected' : '' }} value="{{ $dojang->nama_dojang }}">
                                                            <?= $i; ?>. {{ $dojang->nama_dojang }}
                                                        </option>
                                                        <?php $i++; ?>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <Label for="sekolah">Alamat Sekolah</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="alamat_sekolah" id="alamat" class="form-control">
                                                    <?php $i = 1; ?>
                                                    @foreach($dojangs as $dojang)
                                                        <option class="text-dark" {{ ($schedule->alamat_sekolah === $dojang->alamat_dojang) ? 'selected' : '' }} value="{{ $dojang->alamat_dojang }}">
                                                            <?= $i; ?>. {{ $dojang->alamat_dojang }}
                                                        </option>
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
                                                        <option class="text-dark" {{ ($schedule->hari === $day->day) ? 'selected' : '' }} value="{{ $day->day }}">
                                                            <?= $i; ?>. {{ $day->day }}
                                                        </option>
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
                                                <input type="text" name="jam" class="form-control" placeholder="{{ $schedule->jam }}" id="jam" value="{{ $schedule->jam }}">
                                            </div>
                                        </div>
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