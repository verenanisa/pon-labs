@extends('layouts.main')

@section('container')
<!-- Beranda -->
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide header" data-bs-ride="carousel">
    <div class="container-fluid p-0 m-0 h-0">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active header">
                <img src="IMG/carousel1.jpg" class="d-block w-100 responsive" alt="carousel">
            </div>
            <div class="carousel-item header">
                <img src="IMG/carousel2.jpg" class="d-block w-100 responsive" alt="carousel">
            </div>
            <div class="carousel-item header">
                <img src="IMG/carousel3.jpg" class="d-block w-100 responsive" alt="carousel">
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
<!-- Jumlah Penduduk -->
<div class="container card my-5">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="title-text d-flex justify-content-around">45.407</div>
                <div class="navbar-text d-flex justify-content-around">Jumlah Penduduk</div>
            </div>
            <div class="col-lg-4">
                <div class="title-text d-flex justify-content-around">22.704</div>
                <div class="navbar-text d-flex justify-content-around">Jumlah Laki-Laki</div>
            </div>
            <div class="col-lg-4">
                <div class="title-text d-flex justify-content-around">22.703</div>
                <div class="navbar-text d-flex justify-content-around">Jumlah Perempuan</div>
            </div>
        </div>
    </div>
</div>
<!-- End of Jumlah Penduduk -->

<!-- Seputar Pondok Labu -->
<div class="container">
    <div class="title-text">Seputar Pondok Labu</div>
    <div class="row">
        <div class="col p-0">
            <nav class="nav">
                <!-- <a class="nav-link active navbar-text text-reset" aria-current="page" href="#">Pondok Labu</a>
                <a class="nav-link navbar-text text-reset" href="#">Sejarah Singkat</a>
                <a class="nav-link navbar-text text-reset" href="#">Visi & Misi</a> -->
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <h6 class="body-text p-1">Pondok Labu adalah kelurahan di kecamatan Cilandak, Jakarta Selatan, Jakarta, Indonesia. Kelurahan ini memiliki kode pos 12450 dengan kode wilayah 31.71.030.002. Pada tahun 2018, kelurahan ini memiliki penduduk sebesar 45.407 jiwa dan luas 39,1 km².
        <br>
        <br>
        Kelurahan ini berbatasan dengan Kelurahan Cilandak Barat di sebelah utara, Kelurahan Lebak Bulus di sebelah barat, Kelurahan Cilandak Timur di sebelah timur, dan Kota Depok di sebelah selatan.
    </h6>
</div>
<!-- End of Seputar Ponlab -->

<!-- Pengumuman & Berita -->
<div class="container mt-5">
    <div class="title-text d-flex justify-content-around  mb-5">Pengumuman dan Berita</div>
    <div class="row">
        <!-- Pengumuman -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="ps title-text">Pengumuman</h3>
                        <a href="/informasi" class="ms-auto align-self-center text-reset navbar-text" style="text-decoration:none">Lainnya</a>
                    </div>
                    <div class="row">
                        <!-- Pengumuman 1 -->
                        <div class="col-md-4">
                            <div class="container" style="height: 200px;width: 200px;">
                                <img src="IMG/pengumuman1.jpeg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title sub-title-bold">Judul Pengumuman</h5>
                                <p class="card-text body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p class="card-text body-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <!-- End of Pengumuman 1 -->
                        <!-- Pengumuman 2 -->
                        <div class="col-md-4">
                            <div class="container" style="height: 200px;width: 200px;">
                                <img src="IMG/pengumuman1.jpeg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title sub-title-bold">Judul Pengumuman</h5>
                                <p class="card-text body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p class="card-text body-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <!-- End of Pengumuman 2 -->
                        <!-- Pengumuman 3 -->
                        <div class="col-md-4">
                            <div class="container" style="height: 200px;width: 200px;">
                                <img src="IMG/pengumuman1.jpeg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title sub-title-bold">Judul Pengumuman</h5>
                                <p class="card-text body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p class="card-text body-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <!-- End of Pengumuman 3 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Pengumuman -->
        <!-- Berita -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="ps title-text">Berita</h3>
                        <a href="/berita" class="ms-auto align-self-center text-reset navbar-text" style="text-decoration:none">Lainnya</a>
                    </div>
                    <div class="row">
                        <!-- Pengumuman 1 -->
                        <div class="col-md-4">
                            <div class="container" style="height: 200px;width: 200px;">
                                <img src="IMG/pengumuman1.jpeg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title sub-title-bold">Judul Berita</h5>
                                <p class="card-text body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p class="card-text body-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <!-- End of Pengumuman 1 -->
                        <!-- Pengumuman 2 -->
                        <div class="col-md-4">
                            <div class="container" style="height: 200px;width: 200px;">
                                <img src="IMG/pengumuman1.jpeg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title sub-title-bold">Judul Berita</h5>
                                <p class="card-text body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p class="card-text body-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <!-- End of Pengumuman 2 -->
                        <!-- Pengumuman 3 -->
                        <div class="col-md-4">
                            <div class="container" style="height: 200px;width: 200px;">
                                <img src="IMG/pengumuman1.jpeg" class="img-fluid rounded-start" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title sub-title-bold">Judul Berita</h5>
                                <p class="card-text body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p class="card-text body-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <!-- End of Pengumuman 3 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Berita -->
    </div>
</div>
<!-- End of Pengumuman dan Berita -->
<!-- End of Beranda -->
@endsection