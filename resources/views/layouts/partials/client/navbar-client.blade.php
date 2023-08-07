<div class="container">
    <nav class="navbar navbar-expand-lg fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.page') }}#">
                <img src="{{ asset('images/logo-title-poliwangi.png') }}" class="img-fluid" width="45" alt="">
                &nbsp;
                <img src="{{ asset('images/logo-poliwangi.png') }}" class="img-fluid" width="94" alt="">
            </a>

            {{-- button responsive --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav d-flex">
                    <li class="nav-item my-auto px-2">
                        <a class="nav-link fw-regular text-secondary navbar-hover"
                            href="{{ route('home.page') }}#">Beranda</a>
                    </li>
                    <li class="nav-item my-auto px-2">
                        <a class="nav-link fw-regular text-secondary navbar-hover"
                            href="{{ route('home.page') }}#formulir">Formulir</a>
                    </li>
                    <li class="nav-item my-auto px-2">
                        <a class="nav-link fw-regular text-secondary navbar-hover"
                            href="{{ route('home.page') }}#lacak_dokumen">Lacak
                            Dokumen</a>
                    </li>
                    <li class="nav-item my-auto px-2">
                        <a class="nav-link fw-regular text-secondary navbar-hover"
                            href="{{ route('home.page') }}#tentang_kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item my-auto px-2">
                        <a href="{{ route('home.page') }}#formulir" class="btn btn-theme px-3 py-2">
                            Ajukan Permohonan
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</div>
