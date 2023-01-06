@extends('layouts.main')

@section('container')
<!-- <h1>Halaman Beranda</h1> -->

<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide header" data-bs-ride="carousel">
    <div class="container-fluid p-0 m-0 h-10">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active header">
                <img src="IMG/gambar1.jpg" class="d-block w-100 responsive" alt="...">
            </div>
            <div class="carousel-item header">
                <img src="IMG/gambar2.jpg" class="d-block w-100 responsive" alt="...">
            </div>
            <div class="carousel-item header">
                <img src="IMG/gambar3.jpg" class="d-block w-100 responsive" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- End of Carousel -->

<!-- Beranda -->
<div class="container">
    <!-- Card -->
    <div class="card-group mt-3">
        <div class="card shadow-sm mb-5 me-3 bg-body rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Jumlah Penduduk</h5>
                <p class="card-text">
                <h1>45.407</h1>
                </p>
            </div>
        </div>
        <div class="card shadow-sm mb-5 me-3 bg-body rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Jumlah Laki-Laki</h5>
                <p class="card-text">
                <h1>22.704</h1>
                </p>
            </div>
        </div>
        <div class="card shadow-sm mb-5 me-3 bg-body rounded" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Jumlah Perempuan</h5>
                <p class="card-text">
                <h1>22.703</h1>
                </p>
            </div>
        </div>
    </div>
    <!-- End of Card -->

    <!-- Content -->
    <div class="container">
        <div class="row">
            <!-- Information -->
            <div class="col-8">
                <h3 class="title-text mb-2">Kelurahan Pondok Labu</h3>
                <h6 class="body-text">Pondok Labu adalah kelurahan di kecamatan Cilandak, Jakarta Selatan, Jakarta, Indonesia. Kelurahan ini memiliki kode pos 12450 dengan kode wilayah 31.71.030.002. Pada tahun 2018, kelurahan ini memiliki penduduk sebesar 45.407 jiwa dan luas 39,1 km².
                    <br>
                    <br>
                    Kelurahan ini berbatasan dengan Kelurahan Cilandak Barat di sebelah utara, Kelurahan Lebak Bulus di sebelah barat, Kelurahan Cilandak Timur di sebelah timur, dan Kota Depok di sebelah selatan.
                </h6>
                <h3 class="title-text mt-4 mb-2">Sejarah Pondok Labu</h3>
                <h6 class="body-text">Nama kawasan ini diambil dari kata majemuk pondok dan labu. Pondok berarti gubuk, atau dangau–tempat pemondokan atau tempat penginapan sementara. Labu adalah nama beberapa macam tanaman merambat, antara lain labu yang bahasa ilmiahnya Lagenaria hispida Ser. Famili Cucurbitaceae, yaitu labu besar yang biasa dimakan (Fillet 1888: 193). "Pondok Labu" dapat berarti 'pondok atau gubuk yang dirambati (tanaman) labu'.
                    <br>
                    <br>
                    Kawasan Pondok Labu baru disebut-sebut pada tahun 1803 sebagai milik Pieter Walbeck, di samping Cinere dan Lebak Bulus yang dulu oleh orang-orang Belanda biasa disebut Simplicitas. Di kawasan Pondok Labu, tuan tanah tersebut mempunyai penggilingan padi dan sebuah rumah peristirahatan yang diberi nama Simplicitas (De Haan 1910, (I):103). Pada peta yang dibuat oleh Topographisch Bureau, Batavia 1900, penggilingan padi dan rumah peristirahatan itu terletak tidak begitu jauh dari Kali Pesanggrahan sebelah utara Rempoa.
                </h6>
                <h3 class="title-text  mt-4 mb-2">Visi & Misi Kelurahan Pondok Labu</h3>
                <h6 class="body-text">Visi: 1. Solusi Perizinan Warga Jakarta Misi: 1. Melakukan pembinaan dan pengembangan aparatur PTSP sesuai kompetensi 2. Meningkatkan kualitas pelayanan perizinan non perizinan secara professional 3. Mengedepankan pemanfaatan sistem informasi untuk mempercepat pelayanan 4. Mengelola pengaduan masyarakat dengan berbasis quick response 5. Menyediakan prasarana dan sarana yang memadai dan handal Tujuan dibentuknya PTSP sebagai one stop service di Kelurahan Pondok Labu Jakarta Selatan adalah sebagai berikut: 1. Meningkatkan pelayanan perizinan dan non perizinan 2. Memberikan kemudahan kepada masyarakat untuk mendapatkan layanan perizinan dan non perizinan 3. Meningkatkan kepastian pelayanan perizinan dan non perizinan Strategi Pelayanan: 1. Ketepatan Waktu Penyelesaian Izin 2. Tidak Ada Pengaduan Masyarakat 3. Tingkat Kepuasan Masyarakat 100% Struktur dan Tata Kerja Kelurahan Pondok Labu Jakarta Selatan Struktur organisasi adalah susunan sub-sub sistem dengan hubungan wewenang dan tanggung jawab. Dalam organisasi terdapat struktur yang</h6>
            </div>
            <!-- End of Information -->

            <!-- Announcement -->
            <div class="col-4">
                <h3 class="title-text">Pengumuman</h3>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="IMG/gambar5.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="IMG/gambar5.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="IMG/gambar5.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Announcement -->
        </div>
        <!-- End of row -->

        <!-- News -->
        <div class="d-flex justify-content-between">
            <h3 class="title-text mt-5">Berita</h3>
            <h6 class="list-inline mt-5 me-3"><a href="#">Lainnya</a></h6>
        </div>
        <!-- <ul class="list-inline">
            <li class="list-inline-item">This is a list item.</li>
            <li class="list-inline-item ">But they're displayed inline.</li>
        </ul> -->
        <div class="card-group mt-3">
            <div class="card shadow-sm mb-5 me-3 bg-body rounded" style="width: 18rem;">
                <img src="IMG/gambar2.jpg" class="card-img-top h-100" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card shadow-sm mb-5 me-3 bg-body rounded" style="width: 18rem;">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card shadow-sm mb-5 me-3 bg-body rounded" style="width: 18rem;">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <!-- End of News -->
    </div>
    <!-- End of Content -->
</div>
<!-- End of Beranda -->
@endsection