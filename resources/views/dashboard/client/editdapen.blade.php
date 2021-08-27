@extends('layout/dashboard/client/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-8 text-left">
                            <h5 class="card-category">Ryuken Taekwondo Academy</h5>
                            <h2 class="card-title">Edit Data Pendaftaran</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div>
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="nama">Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama" class="form-control" placeholder="Mohammad Fajar Alfarizy" id="nama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="tplahir">Tempat, Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="tplahir" class="form-control" placeholder="Jakarta" id="tplahir">
                                                </div>
                                                <div class="col-md-1">,</div>
                                                <div class="col-md-4">
                                                    <input type="date" name="tglahir" class="form-control">
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
                                                            <input type="radio" class="form-check-input" name="jkel" id="laki" value="" checked>
                                                            <label for="laki">Laki-laki</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="radio" class="form-check-input" name="jkel" id="perempuan" value="">
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
                                                    <input type="number" name="umur" class="form-control" placeholder="22" id="umur">
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
                                                        <option value=""></option>
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
                                                    <input type="text" name="alamat" class="form-control" placeholder="Jakarta, Indonesia" id="alamat">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="rpenyakit">Riwayat Penyakit</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="rpenyakit" class="form-control" placeholder="-" id="rpenyakit">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="beratbadan">Berat Badan</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="number" name="beratbadan" class="form-control" placeholder="84" id="beratbadan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="notlp">Nomor Telepon</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="notlp" class="form-control" placeholder="081230019040" id="notlp">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <Label for="tmptlatihan">Tempat Latihan</Label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="tmptlatihan" id="tmptlatihan" class="form-control">
                                                        <option value=""></option>
                                                    </select>
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
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <Label for="sabuk">Sertifikat</Label>
                                                </div>
                                                <div class="input-group mb-3 col-md-9">
                                                    <input type="file" class="form-control" id="inputGroupFile01">
                                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <Label for="sabuk">Bukti Pembayaran</Label>
                                                </div>
                                                <div class="input-group mb-3 col-md-9">
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-4 mb-4">
                                            <div class="row">
                                                <div class="col-md-1 offset-4">
                                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                                </div>
                                                <div class="col-md-0 offset-1">
                                                    <a href="/detail-data-siswa" class="btn btn-secondary">Kembali</a>
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