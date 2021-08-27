<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Ryuken Taekwondo Academy</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Tentang Kami") ? 'active' : '' }}" href="/about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Sejarah Taekwondo") ? 'active' : '' }}" href="/history">Sejarah Taekwondo</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/{{ $role }}"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-in-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                        <li class="nav-item mr-sm-4">
                            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
                        </li>
                    @endauth
                    

                    <li class="nav-item">
                        <form class="form-inline mt-1" action="" method="">
                            <div class="form-group">
                                <input type="text" class="btn btn-outline-secondary btn-sm mr-sm-2" placeholder="Search..">
                            </div>
                            <button type="submit" class="btn btn-outline-secondary btn-sm">Submit</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>