<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Toko Sembako Putri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Produk</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href=#> Produk </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kategori"> Kategori </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=#promo> Promo </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=#tentang> Tentang Kami </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=#kontak> Kontak </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('kontak') }}">Contact</a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('about') }}">About</a>
                </li> --}}

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul> --}}

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Login</button>
            </form>
        </div>
    </div>
</nav>
