<div class="container">
    @auth
       <h1>Wellcome back, {{ auth()->user()->name }}</h1> 
    @else
        <h1 class="my-4">Welcome to {{ $title }}</h1>
    @endauth
    
    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Sejarah Taekwondo</h4>
                <div class="card-body">
                    <p class="card-text text-justify">Taekwondo merupakan cabang olahraga beladiri yang menggunakan tangan, kaki dengan disiplin diri, sehingga taekwondo bermanfaat besar dalam kehidupan bermasyarakat. Taekwondo berasal dari Korea dan bermarkas besar di Kukkiwon Seoul Korea, sekarang mempunyai anggota lebih dari 165 negara dan berkembang di Indonesia sekitar tahun 1970.</p>
                </div>
                <div class="card-footer">
                    <a href="/history" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Tentang Ryuken</h4>
                <div class="card-body">
                    <p class="card-text text-justify">Ryuken Taekwondo Academy merupakan kelompok olahraga beladiri yang berdiri pada tanggal 14 Juli 2005 yang dibawahi oleh Pengurus Besar Taekwondo Indonesia (PBTI). Lokasi latihannya terdapat dibeberapa sekolah swasta di Kota Jakarta Timur, yaitu Buahati Islamic School, SDIT As’Sa’Adah, SDIT Insan Mandiri Kalisari, dll.</p>
                </div>
                <div class="card-footer">
                    <a href="/about" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <h4 class="card-header">Informasi Instruktur</h4>
                <div class="card-body">
                    <p class="card-text text-justify">Saat ini Ryuken Taekwondo memiliki 16 pelatih yang dipimpin oleh Sbm. Taufik. Pelatih Ryuken Taekwondo Academy yang terampil dalam mengajar, membimbing, dan membentuk siswa menjadi Taekwondoin yang kuat.</p>
                </div>
                <div class="card-footer">
                    <a href="/about" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section img size = 700x400-->
    <h2>{{ $namabody }}</h2>

    <div class="row mt-3">
        @foreach($dojangs as $dojang)
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <img class="card-img-top mt-4" src="assets/img/buahati.jpeg" alt="{{ $dojang->nama_dojang }}">
                <div class="card-body">
                    <h5 class="card-title">
                        <h5>{{ $dojang->nama_dojang }}</h5>
                    </h5>
                    <small class="form-text">{{ $dojang->alamat_dojang }}</small>
                    <p class="card-text text-justify">{{ $dojang->keterangan }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>