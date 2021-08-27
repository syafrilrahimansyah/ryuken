@if(session()->has('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <p class="alert alert-success alert-dismissible fade show" role="alert">
                        {!! session('success') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
@endif