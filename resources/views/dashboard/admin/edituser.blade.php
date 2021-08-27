@extends('layout/dashboard/admin/index')

@section('container')
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Ryuken Taekwondo Academy</h5>
                            <h2 class="card-title">Edit Data User</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="">
                                <div>
                                    <form action="/edit-data-user/{{ $users->id }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="nama">Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="name" class="form-control" value="{{ $users->name }}" placeholder="{{ $users->name }}" id="nama">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="username">Username</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="username" class="form-control" value="{{ $users->username }}" placeholder="{{ $users->username }}" id="username">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <Label for="role">Role</Label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select name="role" id="role" class="form-control">
                                                        <option class="text-dark" {{ ($users->role === "admin") ? 'selected' : '' }} value="admin">1. Admin</option>
                                                        <option class="text-dark" {{ ($users->role === "coach") ? 'selected' : '' }} value="coach">2. Coach</option>
                                                        <option class="text-dark" {{ ($users->role === "client") ? 'selected' : '' }} value="client">3. Client</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="email">Email</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="email" class="form-control" value="{{ $users->email }}" placeholder="{{ $users->email }}" id="email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container mt-4 mb-4">
                                            <div class="row">
                                                <div class="col-md-1 offset-4">
                                                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                                </div>
                                                <div class="col-md-0 offset-1">
                                                    <a href="/data-user" class="btn btn-secondary">Kembali</a>
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
</div>
@endsection