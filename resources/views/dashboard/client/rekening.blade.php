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
                            <h2 class="card-title">Info Rekening</h2>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 class="card-title">Pembayaran Uang Pendaftaran</h3>
                            <p class="card-text">Lakukan transfer uang pendaftaran sebesar <strong>Rp.100.000</strong> pada rekening yang tertera dibawah ini.</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">

                                <div class="card-group">
                                    <div class="card">
                                        <img src="/assets/img/rekening/logo-bca.png" class="card-img-top img" alt="Bank BCA">
                                        <div class="card-body">
                                            <h4 class="card-title text-sm-center">7562321314 - An. Ryuken</h4>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/assets/img/rekening/logo-bni.png" class="card-img-top img" alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title text-sm-center">7562321314 - An. Ryuken</h4>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="/assets/img/rekening/logo-bri.png" class="card-img-top img1" alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title text-sm-center">7562321314 - An. Ryuken</h4>
                                        </div>
                                    </div>
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