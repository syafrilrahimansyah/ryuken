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
                            <h2 class="card-title">Data User</h2>
                        </div>
                        <div class="col-sm-5 offset-1 mt-4">
                            <form class="form-inline" action="/data-user" method="GET">
                                <label class="sr-only float-right " for="inlineFormInputName2">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2 col-md-7" id="inlineFormInputName2" placeholder="Masukkan keyword pencarian.." name="keyword" value="{{ request('keyword') }}">
                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('dashboard/partials/session')
                                @if ($users->count())
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Aksi</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Email</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <?php $i=1; ?>
                                                @foreach($users as $user)
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td>
                                                            <a class="badge badge-success" href="/edit-data-user/{{ $user->id }}">edit</a>
                                                            <a class="badge badge-warning" href="/hapus-data-user/{{ $user->id }}" onclick="">hapus</a>
                                                        </td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->role }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->created }}</td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                @endforeach
                                            </tbody>
                                    </table>
                                @else
                                    <p class="text-center fs-4">Data not found.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection