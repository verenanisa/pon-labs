@extends('layouts.main')

@section('container')
<!-- <h1>Halaman Masuk</h1> -->
<!-- Section -->
<div class="container mt-4">
    <div class="row justify-content-md-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="title-text-bold">Masuk Akun</h3>
                    <h6 class="mb-3 sub-title">Buat kamu yang sudah terdaftar, silakan masuk ke akunmu.</h6>
                    <div class="row">
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Nama Pengguna">
                                <label for="floatingInput" class="body-text">Nama Pengguna</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Kata Sandi">
                                <label for="floatingPassword" class="body-text">Kata Sandi</label>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary mt-1 body-text">Masuk</button>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label ps-2 body-text" for="exampleCheck1">Ingat saya</label>
                                <a href="" class="ms-auto body-text">Lupa kata sandi?</a>
                            </div>
                            <footer class="footer mx-0 mt-3 ps-0 body-text">
                                <p>Belum punya akun?
                                    <a href="/daftar">Daftarkan Dirimu</a>
                                </p>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Section -->
@endsection