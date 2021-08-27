@extends('layout/main')

@section('container')
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Sejarah
        <small>Taekwondo</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Sejarah Taekwondo</li>
    </ol>

    <!-- Content Row -->
    <blockquote class="blockquote">
        <div class="container text-justify">
            @foreach ($histories as $history)
                {!! $history->body !!}
                {!! $history->pengarang !!}
            @endforeach
    </blockquote>
</div>
<!-- /.row -->
<hr>
@include('partials/socialsharing')
@endsection