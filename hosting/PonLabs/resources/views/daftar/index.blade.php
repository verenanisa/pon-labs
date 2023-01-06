@extends('layouts.main')

@section('container')
<!-- <h1>Halaman Masuk</h1> -->
<!-- Section -->
<div class="container mt-4">
    <div class="row justify-content-md-center">
        <div class="col-lg-5">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h3 class="title-text-bold">Form Pendaftaran</h3>
                    <h6 class="mb-3 sub-title">Mohon isi data berikut dengan benar.</h6>
                    <div class="row">
                        <form action="/daftar" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Nik" required value="{{ old('nik') }}">
                                <label for="nik" class="body-text">NIK</label>
                                @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" required value="{{ old('nama') }}">
                                <label for="nama" class="body-text">Nama Lengkap (Sesuai KTP)</label>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nama_pengguna" class="form-control @error('nama_pengguna') is-invalid @enderror" id="nama_pengguna" placeholder="Nama Pengguna" required value="{{ old('nama_pengguna') }}">
                                <label for="nama_pengguna" class="body-text">Nama Pengguna</label>
                                @error('nama_pengguna')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" placeholder="Nomor Telepon" required value="{{ old('nomor_telepon') }}">
                                <label for="nomor_telepon" class="body-text">Nomor Telepon</label>
                                @error('nomor_telepon')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- <div class="row body-text">
                                <div class="col-4">
                                    <label for="inputState" class="form-label">Tanggal</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>1</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <label for="inputBulan" class="form-label">Bulan</label>
                                    <select id="inputBulan" class="form-select">
                                        <option selected>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>September</option>
                                        <option>Oktober</option>
                                        <option>November</option>
                                        <option>Desember</option>
                                    </select>
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="inputTahun" class="form-label">Tahun</label>
                                    <select id="inputTahun" class="form-select">
                                        <option selected>2022</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <fieldset class="row mb-3 body-text">
                                <legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset> -->
                            <div class="form-floating mb-3">
                                <input type="password" name="sandi" class="form-control  @error('sandi') is-invalid @enderror" id="sandi" placeholder="Kata Sandi" required>
                                <label for="sandi" class="body-text">Kata Sandi</label>
                                @error('sandi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary mt-1 body-text">Daftar</button>
                            </div>
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label body-text" for="exampleCheck1">Saya menyetujui <a href="#">Syarat dan Ketentuan</a> dan <a href="#">Kebijakan Privasi</a> yang berlaku</label>
                            </div> -->
                            <footer class="footer mx-0 mt-3 ps-0 body-text">
                                <p>Sudah punya akun?
                                    <a href="/masuk">Masuk di sini</a>
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