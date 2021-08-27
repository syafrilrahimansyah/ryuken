@extends('layout/main')

@section('container')
<!-- container -->

<!-- <div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show col-lg-7 col-sm-4 mb-4 offset-9" role="alert">
            <strong>Username/Password </strong>Anda 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show col-lg-7 col-sm-4 mb-4 offset-9" role="alert">
            <strong>Berhasil dibuat </strong>silahkan 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div> -->

<div class="container mb-5">
    <div class="container">
        <div class="row my-5 ">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mb-1">
                @include('partials/session')
                @include('partials/loginError')
                <div class="card card-signin ">
                    <div class="card-body test">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" action="/login" method="POST">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>
                                <label for="username">Username</label>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <?php if (isset($error)) { ?>
                                <p class="alert-danger">username / password salah.</p>
                            <?php } ?>
                            <div class="custom-control custom-checkbox mb-3 float-right mr-2">
                                <small>Not registered? <a href="/create-acc">Register Now!</a></small>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection