@extends('layout/main')

@section('container')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('/assets/img/carousel2.jpeg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Ryuken Taekwondo</h3>
                    <p>Permainan yang diharapkan untuk mengurangi rasa bosan siswa.</p>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('/assets/img/carousel1.jpeg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Ryuken Taekwondo</h3>
                    <p>Permainan yang diharapkan untuk mengurangi rasa bosan siswa.</p>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('/assets/img/carousel3.jpeg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Ryuken Taekwondo</h3>
                    <p>Permainan yang diharapkan untuk mengurangi rasa bosan siswa.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<a href="/data-pendaftaran">dashboard admin</a>
<br>
<a href="/pendaftaran-anggota">dashboard user</a>
<br>
<a href="/jadwal-latihan">dashboard coach</a>
{{ $test }}
@include('home/partials/body')

<div class="container d-flex justify-content-end">
    {{ $dojangs->links() }}
</div>
<hr>
@include('partials/socialsharing')
@endsection