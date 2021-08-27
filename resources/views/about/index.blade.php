@extends('layout/main')

@section('container')
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Tentang
        <small>kami</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Tentang</li>
    </ol>
</div>
{{ $nama }}
<hr>
@include('partials/socialsharing')
@endsection