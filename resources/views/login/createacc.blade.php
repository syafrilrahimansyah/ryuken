@extends('layout/main')

@section('container')

<div class="container">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body test">
                            <h5 class="card-title text-center">Create Account</h5>
                            <form class="form-signin" action="/create-acc" method="POST">
                                @csrf
                                <div class="form-label-group">
                                    <input type="text" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" autofocus required>
                                    <label for="inputName">Name</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="text" id="inputUsername" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}" required>
                                    <label for="inputUsername">Username</label>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    <label for="inputEmail">Email</label>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                                    <label for="inputPassword">Password</label>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="hidden" name="created" value="{{ $date }}">
                                </div>

                                {{-- <div class="form-label-group">
                                    <input type="password" id="inputPassword2" class="form-control" placeholder="Confirm Password" name="password2">
                                    <label for="inputPassword2">Confirm Password</label>
                                    <small class="form-text text-danger"></small>
                                </div> --}}
                                <div class="custom-control custom-checkbox mb-3 float-right mr-2">
                                    <small>Already registered? <a href="/login">Login!</a></small>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection