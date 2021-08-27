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
                            <h2 class="card-title">Edit Data Coach</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="">
                                <div>
                                    <form action="/edit-data-coach/{{ $coach->id }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="nama">Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama" class="form-control" placeholder="{{ $coach->nama }}" id="nama" value="{{ $coach->nama }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="tplahir">Tempat, Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="tmpt_lahir" class="form-control" placeholder="{{ $coach->tmpt_lahir }}" id="tplahir" value="{{ $coach->tmpt_lahir }}">
                                                </div>
                                                <div class="col-md-1">,</div>
                                                <div class="col-md-4">
                                                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $coach->tgl_lahir }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-check-inline">
                                                        <div class="col-md-7">
                                                            <input type="radio" class="form-check-input" name="jkel" id="laki" value="{{ $coach->jkel }}" {{ ($coach->jkel === "Laki-laki") ? 'checked' : '' }}>
                                                            <label for="laki">Laki-laki</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="radio" class="form-check-input" name="jkel" id="perempuan" value="{{ $coach->jkel }}" {{ ($coach->jkel === "Perempuan") ? 'checked' : '' }}>
                                                            <label for="perempuan">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="umur">Umur</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="umur" class="form-control" placeholder="{{ $coach->umur }}" id="umur" value="{{ $coach->umur }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <Label for="agama">Agama</Label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="agama" id="agama" class="form-control">
                                                        <?php $i = 1; ?>
                                                            @foreach($religions as $religion)
                                                                <option class="text-dark" {{ ($coach->agama === $religion->religion) ? 'selected' : '' }} value="{{ $coach->agama }}"><?= $i; ?>. {{ $religion->religion }}</option>
                                                            <?php $i++; ?>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="alamat">Alamat Lengkap</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="alamat" class="form-control" placeholder="{{ $coach->alamat }}" id="alamat" value="{{ $coach->alamat }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="notlp">Nomor Telepon</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="no_tlp" class="form-control" placeholder="{{ $coach->no_tlp }}" id="notlp" value="{{ $coach->no_tlp }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <Label for="sabuk">Tingkatan Sabuk</Label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="sabuk" id="sabuk" class="form-control">
                                                        <?php $i = 1; ?>
                                                        @foreach($belts as $belt)
                                                            <option class="text-dark" {{ ($coach->sabuk === $belt->belt) ? 'selected' : '' }} value="{{ $belt->belt }}">
                                                                <?= $i; ?>. {{ $belt->belt }}
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
                                                    <label for="aboutme">About Me</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="aboutme" id="aboutme" rows="3" placeholder="{{ $coach->aboutme }}"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-4 mb-4">
                                            <div class="row">
                                                <div class="col-md-1 offset-4">
                                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                                </div>
                                                <div class="col-md-0 offset-1">
                                                    <a href="/data-coach" class="btn btn-secondary">Kembali</a>
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