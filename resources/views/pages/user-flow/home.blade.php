@extends('pages.home.index')

@section('content')
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="{{ route('landing-page') }}"><span>Harapan Bangsa</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#header">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Fasilitas</a></li>
            <li><a href="#portfolio">Prestasi</a></li>
            <li><a href="#team">Pendiri</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li class="get-started"><a href="{{ route('daftar') }}">Daftar</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
    <h1>Selamat Datang di SMK Harapan Bangsa </h1>
    <h2>Ayo Kita Belajar Bersama</h2>
    <a href="{{ route('daftar') }}" class="btn-get-started scrollto">Daftar Sekarang</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container">

        <div class="row content">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img/kepala-sekolah.jpg')}}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
            Sekolah Harapan Bangsa didirikan pada tahun 1995 untuk memenuhi kebutuhan akademik yang semakin berkembang di Modernland, yang berada di atas tanah seluas 330 hektar di kawasan metropolitan, Tangerang. Dengan tujuan untuk mendidik murid-murid sebagai harapan bagi bangsa.
            </p>
            <p class="font-italic">
            Diawali saat PT Modernland Realty mengakuisisi Sekolah Ganesha yang berada di Jl. Pulau Putri Raya Kav 10, Modernland, Tangerang dan menamainya dengan Sekolah Harapan Bangsa, yang bernaung di bawah YayasanPendidikan Harapan Bangsa. Dengan jumlah awal 100 siswa dan 20 guru dari kelas satu sampai empat. Kini Sekolah Harapan Bangsa telah menghasilkan ratusan lulusan di sepanjang perjalanannya.
            </p>
        </div>
        </div>

    </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
            <h3>Kenapa Memilih Sekolah Ini?</h3>
            <p>
                Lebih dari 1,750 siswa-siswi dengan beragam latar belakang datang ke Sekolah Harapan Bangsa mencari sebuah lembaga pendidikan formal yang mempunyai pengakuan luar biasa baik secara prestasi akademik, proses belajar mengajar serta suasana belajar yang menyenangkan, tenaga pengajar dan staff yang kompeten, kesempatan untuk meraih beasiswa, dan penerapan
    kurikulum nasio di Indonesia tetapi juga kompeten secara global.
            </p>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Ruang Kelas</h4>
                    <p>Ruang kelas dilengkapi pendingin ruangan (AC) dan didesain agar anak merasa nyaman dan dapat berinteraksi dengan guru serta teman-temannya dengan leluasa. Laboratorium Komputer, Laboratorium IPA,Ruang Kesehatan, Kantin Sekolah, Perpustakaan & Audio visual, Mushola, Lapangan Olahraga.</p>
                </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Lebih Menekankan Kepada Pendidikan Karakter</h4>
                    <p>Memungkinkan Siswa Lebih Aktif, Inovatif dan Kreatif, Lebih Responsif Terhadap Fenomena Sosial yang Ada, Proses Penilaian Dilakukan Dari Semua Aspek, Lembaga Memperoleh Pendampingan dari Pusat.</p>
                </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Prestasi Yang Didapatkan</h4>
                    <p>Juara 1 Three On Three	DSFM Competition 2011
                    Juara 1	Kejuaraan Silat Antar Pelajar
                    Juara 1 Lomba Debat Bahasa Inggris 
                    Juara I Vocal Group Art Competition Tahun 2012
                    Juara II Futsal	UNPI FUTSAL LEAGUE 2012	</p>
                </div>
                </div>
            </div>
            </div><!-- End .content-->
        </div>
        </div>

    </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
    <div class="container">

        <div class="row">
        <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
            <h2>Fasilitas</h2>
            <p>Fasilitas belajar merupakan sarana dan prasarana pembelajaran. Prasarana meliputi kantin, ruang belajar, lapangan olahraga, LAB Komputer, dll.</p>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{asset('assets/img/kantin.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{asset('assets/img/kelas.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{asset('assets/img/lab komputer.jpeg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-box align-self-center" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{asset('assets/img/lpangan.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            </div>
        </div>
        </div>

    </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-left">
        <h2>Prestasi</h2>
        <p>Dibawah ini adalah bukti dokumentasi prestasi yang didapatkan oleh sekolah kami :</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-akademik">Akademik</li>
            <li data-filter=".filter-olahraga">Olahraga</li>
            </ul>
        </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/vocal group.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Vocal Group</h4>
                <p>Juara 1</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/vocal group.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>                  
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/basket1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Basket</h4>
                <p>Juara 2</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/basket1.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga"><i class="bx bx-plus"></i></a>                  
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/debat-inggris.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Debat Bahasa Inggris</h4>
                <p>Juara 1</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/debat inggris.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>                  
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/SILAT.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Pencak Silat</h4>
                <p>Juara 1</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/SILAT.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga"><i class="bx bx-plus"></i></a>                  
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-akademik">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/cerdas-cermat.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Cerdas Cermat</h4>
                <p>Juara 2</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/cerdas-cermat.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Akademik"><i class="bx bx-plus"></i></a>                  
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-olahraga">
            <div class="portfolio-wrap">
            <img src="{{asset('assets/img/futsal.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4>Futsal</h4>
                <p>Juara 2</p>
                <div class="portfolio-links">
                <a href="{{asset('assets/img/futsal.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Olahraga"><i class="bx bx-plus"></i></a>                  
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
    <div class="container">

        <div class="row">
        <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
            <h2>Pendiri Sekolah</h2>
            <p>Para pendiri sekolah yang berasal dari latar belakang berbeda namun bisa satu tujuan</p>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">

            <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{asset('assets/img/team/team-1.png')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Ghibran Aryasena</h4>
                    <span>Pendiri</span>
                    <p>Saya ingin mempersekolahkan orang lain dengan biaya murah</p>                    
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{asset('assets/img/team/team-2.png')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Marcelino Stevenson</h4>
                    <span>Pendiri</span>
                    <p>Meningkatkan kreativitas untuk mencerdaskan generasi bangsa</p>                    
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="{{asset('assets/img/team/team-3.png')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>Mahesa Fikri Firdaus</h4>
                    <span>Pendiri</span>
                    <p>Lorem ipsum dolor sit amet</p>                    
                </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="{{asset('assets/img/team/team-4.png')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                    <h4>M Adi Siswanto</h4>
                    <span>Pendiri</span>
                    <p>Break, the limits!</p>                    
                </div>
                </div>
            </div>

            </div>

        </div>
        </div>

    </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">
        <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
            <h2>Kontak</h2>
            <p>Untuk info lebih lanjut bisa menghubungi kontak yang tercantum.</p>
            </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.376731341821!2d106.57269601532305!3d-6.345235495408159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e34f7d4a90d7%3A0x507976b9b6d16e2a!2sJafra%20Parung%20Panjang!5e0!3m2!1sid!2sid!4v1616331876465!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>A108 Adam Street, New York, NY 535022</p>
            </div>
            <div class="row">
            <div class="col-lg-6 mt-4">
                <div class="info">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info w-100 mt-4">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
                </div>
            </div>
            </div>
        </div>
        </div>

    </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->
@endsection