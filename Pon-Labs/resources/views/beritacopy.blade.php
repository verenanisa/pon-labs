@extends('layouts.main')

@section('container')
<!-- News -->
<div class="container berita my-3">
    <h3 class="title-text-bold">Berita Lainnya</h3>
    <div class="row row-cols-1 row-cols-lg-3 g-4">
        <div class="col">
            <div class="card">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Card title</h5>
                    <p class="card-text body-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Card title</h5>
                    <p class="card-text body-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Card title</h5>
                    <p class="card-text body-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Card title</h5>
                    <p class="card-text body-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Card title</h5>
                    <p class="card-text body-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="IMG/gambar2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Card title</h5>
                    <p class="card-text body-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
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