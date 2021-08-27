<div class="container mt-4 mb-4">
    <footer class="dark">
        @include('partials/session')`
        @auth
            <form action="{{ $slug }}" method="POST">
                @csrf
                <div class="mb-2">
                    <input type="text" value="{{ auth()->user()->name }}" class="form-control" name="nama"  placeholder="Masukkan nama anda">
                </div>
                <div class="mb-2">
                    <textarea class="form-control" rows="3" name="pesan" placeholder="Berikan komentar"></textarea>
                </div>
                <div class="form-label-group">
                    <input type="hidden" name="published_at" value="{{ $date }}">
                </div>
                <button type="submit" name="submit" class="btn btn-secondary">Save</button>
            </form>
        @else
            <form action="{{ $slug }}" method="POST">
                @csrf
                <div class="mb-2">
                    <input type="text" disabled class="form-control" name="nama"  placeholder="Masukkan nama anda.. (Silahkan login jika ingin mengisi komentar)">
                </div>
                <div class="mb-2">
                    <textarea class="form-control" disabled rows="3" name="pesan" placeholder="Berikan komentar.. (Silahkan login jika ingin mengisi komentar)"></textarea>
                </div>
                <div class="form-label-group">
                    <input type="hidden" name="published_at" value="{{ $date }}">
                </div>
                <button type="submit" disabled name="submit" class="btn btn-secondary">Save</button>
            </form>
        @endauth
        
        <hr>
        <div class="">
            @foreach($socialsharings as $socialsharing)
            <div class="">
                <div class="row card-body border-bottom mb-3">
                    <div class="col-md-3">
                        <h6 class="card-title">{{ $socialsharing->nama }}</h6>
                        <small class="text-secondary">{{ \Carbon\Carbon::parse($socialsharing->published_at)->diffForHumans() }}</small>
                    </div>
                    <div class="col-md-9">
                        <p class="card-text">{{ $socialsharing->pesan }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container d-flex justify-content-end">
</div>
    </footer>
</div>
