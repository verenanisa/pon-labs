@extends('layouts.main')

@section('container')
<!-- News -->
<div class="container berita my-3">
    <h3 class="title-text-bold mb-3">Pengumuman Lainnya</h3>

    <div class="row justify-content-end mb-3">
        <div class="col-md-6">
            <form action="/informasi">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Pengumuman" name="cariinformasi" value="{{request('cariinformasi')}}">
                    <button class="btn btn-outline-secondary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-lg-3 g-4">
        @foreach ($informasi as $informasi)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold"><a href="/informasi/{{ $informasi->slug }}" class="text-decoration-none">{{$informasi->judul_pengumuman}}</a></h5>
                    <p class="card-text body-text">{{$informasi->excerpt}}</p>
                    <a href="/informasi/{{ $informasi->slug }}" class="text-decoration-none">Lihat lebih banyak...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End of News -->
<!-- Pagination -->
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End of Pagination -->
@endsection