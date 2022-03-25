@extends('layouts.index')

@section('content-beranda')
    <!-- ---------------------TENTANG----------------------------- -->
    <section id="tentang-sigka">
        <div class="judul-tentang">
            <p>Tentang SIGKA</p>
            <h1>Kenapa platform ini penting</h1>
        </div>
        <div class="tentang-box">
            <div class="tentang">
                <h1>Air bagi masyarakat Pontianak</h1>
                <div class="tentang-desc">
                    <div class="tentang-icon">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <div class="tentang-text">
                        <p>Kota Pontianak mengandalkan Sungai Kapuas sebagai sumber mata air utama bagi masyarakatnya
                            untuk memenuhi kebutuhan rumah tangga dan agrikultur.</p>
                    </div>
                </div>
                <h1>Urgensi untuk menjaga kualitas air</h1>
                <div class="tentang-desc">
                    <div class="tentang-icon">
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div>
                    <div class="tentang-text">
                        <p>Ketersediaan air bersih wajib setara dengan kebutuhan terhadap air. Apabila terjadi
                            sebaliknya, maka akan terjadi krisis kelangkaan air.</p>
                    </div>
                </div>
                <h1>Teknologi informasi sebagai pusat publikasi informasi</h1>
                <div class="tentang-desc">
                    <div class="tentang-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="tentang-text">
                        <p>Teknologi informasi dapat digunakan untuk membagikan hasil pemantauan secara cepat agar
                            masyarakat dapat turut berpartisipasi dalam menjaga kualitas air di Kota Pontianak</p>
                    </div>
                </div>
            </div>
            <div class="tentang-img">
                <img src="{{ url('frontend/images/fe-alunalun.png') }}" alt="">
            </div>
        </div>
    </section>

    <!-- ----------------------------SUNGAI-------------------------------- -->
    <section id="sungai">
        <div class="judul-tentang">
            <p>Perairan di Pontianak</p>
            <h1>Bagaimana perairan menjadi bagian penting bagi masyarakat Pontianak?</h1>
        </div>
        <div class="sungai-box">
            <div class="single-sungai">
                <img src="{{ url('frontend/images/1.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="sungai-text">
                    <h3>Sungai di Kota Pontianak</h3>
                    <hr>
                    <p>Kota Pontianak memiliki sungai dan parit dengan total keseluruhan sebesar 61 sungai atau parit
                    </p>
                </div>
            </div>
            <div class="single-sungai">
                <img src="{{ url('frontend/images/2.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="sungai-text">
                    <h3>Manfaat sungai bagi Kota Pontianak</h3>
                    <hr>
                    <p>Sungai dan parit di Kota Pontianak digunakan masyarakatnya untuk keperluan sehari-hari dan
                        sebagai penunjang sarana transportasi</p>
                </div>
            </div>
            <div class="single-sungai">
                <img src="{{ url('frontend/images/3.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="sungai-text">
                    <h3>3 Sungai Besar di Kota Pontianak</h3>
                    <hr>
                    <p>Kota Pontianak dipisahkan oleh Sungai Kapuas Besar, Sungai Kapuas Kecil, dan Sungai Landak</p>
                </div>
            </div>
            <div class="single-sungai">
                <img src="{{ url('frontend/images/4.jpg') }}" alt="">
                <div class="overlay"></div>
                <div class="sungai-text">
                    <h3>3 Sungai Besar di Kota Pontianak</h3>
                    <hr>
                    <p>Kota Pontianak dipisahkan oleh Sungai Kapuas Besar, Sungai Kapuas Kecil, dan Sungai Landak</p>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------Metode STORET------------------------------------ -->
    <section id="storet">
        <div class="judul-tentang">
            <p>Metode STORET</p>
            <h1>Penentuan status mutu air</h1>
        </div>
        <div class="storet-row">
            <div class="storet-col">
                <div class="storet-header">
                    <i class="fa-solid fa-1"></i>
                </div>
                <p>Mengumpulkan data kualitas kebersihan air secara periodik</p>
            </div>
            <div class="storet-col">
                <div class="storet-header">
                    <i class="fa-solid fa-2"></i>
                </div>
                Menganalisis data hasil pengukuran menggunakan parameter nilai baku mutu air yang telah ditetapkan
                sesuai dengan kelasnya
            </div>
            <div class="storet-col">
                <div class="storet-header">
                    <i class="fa-solid fa-3"></i>
                </div>
                Hasil pengukuran yang memenuhi nilai baku mutu diberikan skor 0
            </div>
            <div class="storet-col">
                <div class="storet-header">
                    <i class="fa-solid fa-4"></i>
                </div>
                <p>Hasil pengukuran yang tidak memenuhi nilai baku mutu diberikan penilaian yang mengacu pada tabel</p>
            </div>
            <div class="storet-col">
                <div class="storet-header">
                    <i class="fa-solid fa-5"></i>
                </div>
                <p>Nilai yang ada pada setiap parameter dijumlahkan dan diberikan status mutunya berdasarkan akumulasi
                    skornya</p>
            </div>
        </div>
        <div class="storet-row">
            <img src="{{ url('frontend/images/tabelstoret.jpg') }}">
            <img src="{{ url('frontend/images/tabelstoret.jpg') }}">
        </div>
    </section>
@endsection
