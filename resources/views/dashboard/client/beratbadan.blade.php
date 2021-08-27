@extends('layout/dashboard/client/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <h5 class="card-category">Ryuken Taekwondo Academy</h5>
                            <h2 class="card-title">Berat Badan Ideal Tournament</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h4 class="card-title">Mohammad Fajar Alfarizy</h4>
                                <h5 class="card-subtitle mb-2 text-muted">Kelas Putera</h5>
                                <p class="card-text">Berat badan anda 84 kg, anda bisa mengikuti kejuaraan pada kelas under 87 kg.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard/client/partials/beratideal')
    </div>
</div>

@endsection