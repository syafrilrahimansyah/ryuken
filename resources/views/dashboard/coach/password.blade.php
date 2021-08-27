@extends('layout/dashboard/coach/index')

@section('container')

<div class="content">
    <div class="row">
        <div class="col-sm-8 col-md-8 col-lg-8 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body test">
                    <h5 class="card-title text-center">Change Password</h5>
                    <form class="form-signin" action="" method="POST">
                        @csrf
                        <div class="form-label-group">
                            <input type="password" id="" class="form-control" placeholder="Current Password" name="password1">
                            <small class="form-text text-danger"></small>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="" class="form-control" placeholder="New Password" name="password2">
                            <small class="form-text text-danger"></small>
                        </div>


                        <div class="form-label-group">
                            <input type="text" id="" class="form-control" placeholder="New Password, again" name="#" autofocus>
                            <small class="form-text text-danger"></small>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection