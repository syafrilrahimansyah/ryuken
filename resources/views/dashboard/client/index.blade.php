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
                            <h2 class="card-title">Pendaftaran Anggota Baru</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            @error('user_id')
                                <div>
                                    {{ $message }}
                                </div>
                            @enderror
                            @include('dashboard/partials/session')
                            <div>
                                <form action="/pendaftaran-anggota" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="nama">Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Anda" id="nama" required>
                                                {{-- <small class="form-text text-danger">#</small> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="notlp">Nomor Telepon</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="no_tlp" class="form-control" placeholder="Masukkan Nomor Telepon Yang Bisa Dihubungi" id="notlp" required>
                                                {{-- <small class="form-text text-danger">#</small> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="tplahir">Tempat, Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="tmpt_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda" id="tplahir" required>
                                                {{-- <small class="form-text text-danger">#</small> --}}
                                            </div>
                                            <div class="col-md-1">,</div>
                                            <div class="col-md-4">
                                                <input type="date" name="tgl_lahir" class="form-control">
                                                {{-- <small class="form-text text-danger">#</small> --}}
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
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="umur">Umur</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="number" name="umur" class="form-control" placeholder="Masukkan Umur Anda" id="umur" required>
                                                {{-- <small class="form-text text-danger">#</small> --}}
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
                                                        <option class="text-dark" value="{{ $religion->religion }}"><?= $i; ?>. {{ $religion->religion }}</option>
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
                                                <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap Anda" id="alamat" required>
                                                {{-- <small class="form-text text-danger">#</small> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <Label for="tmptlatihan">Tempat Latihan</Label>
                                            </div>
                                            <div class="col-md-9">
                                                <select name="tmpt_latihan" id="tmptlatihan" class="form-control">
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
                                                <small>pilih sabuk putih jika belum pernah ikut Taekwondo</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="rpenyakit">Riwayat Penyakit</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" name="rw_penyakit" class="form-control" placeholder="Masukkan Riwayat Penyakit Anda" id="rpenyakit" required>
                                                {{-- <small class="form-text text-danger">#</small> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="beratbadan">Berat Badan</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="number" name="beratbadan" class="form-control" placeholder="Masukkan Berat Badan Anda" id="beratbadan" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <Label for="sabuk">Sertifikat</Label>
                                            </div>
                                            <div class="input-group mb-3 col-md-9">
                                                <input type="file" name="sertifikat" class="form-control" id="inputGroupFile01">
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
                                                <input type="file" name="pembayaran" class="form-control" id="inputGroupFile02">
                                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="published_at" value="{{ $date }}">
                                        <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}"> 
                                    </div>

                                    <div class="container mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-md-1 offset-4">
                                                <button type="submit" name="submit" class="btn btn-primary">DAFTAR</button>
                                            </div>
                                            <div class="col-md-0 offset-1">
                                                <button type="reset" name="reset" class="btn btn-danger">RESET</button>
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
@endsection