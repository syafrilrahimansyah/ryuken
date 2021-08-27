@if(session()->has('loginError'))
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <p class="alert alert-danger alert-dismissible fade show" role="alert">
                        {!! session('loginError') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
@endif