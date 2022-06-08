<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="#page-top">
            <img src="{{ url('frontend/extendpage/assets/img/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('peta') }}">Peta
                        Pemantauan</a>
                </li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('data') }}">Data
                        Pemantauan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
