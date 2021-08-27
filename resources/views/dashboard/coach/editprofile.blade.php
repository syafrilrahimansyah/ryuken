@extends('layout/dashboard/coach/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile Coach</h5>
                </div>
                @include('dashboard/partials/session')
                <div class="card-body">
                    <form action="/profile-coach" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" id="nama" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="notlp">Nomor Telepon</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="no_tlp" class="form-control" placeholder="Masukkan Nomor Telepon Yang Bisa Dihubungi" id="notlp" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="tplahir">Tempat, Tanggal Lahir</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="tmpt_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda" id="tplahir" required>
                            </div>
                            <div class="col-md-1">,</div>
                            <div class="col-md-4">
                                <input type="date" name="tgl_lahir" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-check-inline">
                                    <div class="col-md-7">
                                        <input type="radio" class="form-check-input" name="jkel" id="laki" value="Laki-laki" checked>
                                        <label for="laki">Laki-laki</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="radio" class="form-check-input" name="jkel" id="perempuan" value="Perempuan">
                                        <label for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="umur">Umur</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="umur" class="form-control" placeholder="Masukkan Umur Anda" id="umur" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <Label for="agama">Agama</Label>
                            </div>
                            <div class="col-md-9">
                                <select name="agama" id="agama" class="form-control">
                                    <?php $i = 1; ?>
                                    @foreach($religions as $religion)
                                        <option class="text-dark" value="{{ $religion->religion }}"><?= $i; ?>. {{ $religion->religion }}</option>
                                        <?php $i++; ?>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label for="alamat">Alamat Lengkap</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap Anda" id="alamat" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <Label for="sabuk">Tingkatan Sabuk</Label>
                            </div>
                            <div class="col-md-9">
                                <select name="sabuk" id="sabuk" class="form-control">
                                    <?php $i = 1; ?>
                                    @foreach($belts as $belt)
                                        <option class="text-dark" value="{{ $belt->belt }}"><?= $i; ?>. {{ $belt->belt }}</option>
                                    <?php $i++; ?>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <label>About Me</label>
                            </div>
                            <div class="col-md-9">
                                <textarea rows="4" cols="80" name="aboutme" class="form-control" placeholder="Here can be your description." value=""></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3">
                                <Label for="sabuk">Foto</Label>
                            </div>
                            <div class="input-group col-md-9">
                                <input type="file" class="form-control" id="inputGroupFile01">
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                <small class="text-primary">Foto harus menggunakan dobok.</small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('dashboard/coach/partials/sidecard')
    </div>
</div>
@endsection