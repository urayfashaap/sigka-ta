<body>
    <section id="banner">
        <img src="{{ url('frontend/images/logo.png') }}" alt="" class="logo">
        <div class="banner-text">
            <h2>Selamat Datang</h2>
            <img src="{{ url('frontend/images/border.png') }}" alt="">
            <h1>SIGKA</h1>
            <p>Sistem Informasi Geografis Kualitas Air</p>
            <div class="banner-btn">
                <a href="{{ route('data') }}"><span></span>Data Pemantauan</a>
                <a href="{{ route('peta') }}"><span></span>Peta Pemantauan</a>
            </div>
        </div>
    </section>
