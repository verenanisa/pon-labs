@extends('layouts.main')

@section('container')
<div class="container my-3">
    <h3 class="mb-3 title-text-bold">Pengajuan Perbaikan Kartu Tanda Penduduk (KTP)</h3>
    <div class="row">
        <div class="col-lg-3">
            <div class="mb-3">
                <label for="exampleInput" class="form-label body-text">Nama Lengkap (Sesuai KTP)</label>
                <input type="text" class="form-control" id="exampleInput">
            </div>
            <div class="mb-3">
                <label for="exampleInput" class="form-label body-text">NIK</label>
                <input type="text" class="form-control" id="exampleInput">
            </div>
        </div>
        <div class="col-lg-3 mb-3">
            <label for="inputGroupFile01" class="form-label body-text">Surat Pengantar RT/RW</label>
            <input type="file" class="form-control mb-3" id="inputGroupFile01" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <label for="inputGroupFile04" class="form-label body-text">Akta Kelahiran</label>
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>
        <div class="col-lg-3 mb-3">
            <label for="inputGroupFile02" class="form-label body-text">Surat Nikah</label>
            <input type="file" class="form-control mb-3" id="inputGroupFile02" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <label for="inputGroupFile05" class="form-label body-text">Ijazah/SKK</label>
            <input type="file" class="form-control" id="inputGroupFile05" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>
        <div class="col-lg-3 mb-3">
            <label for="inputGroupFile03" class="form-label body-text">SK Pemuka Agama</label>
            <input type="file" class="form-control mb-3" id="inputGroupFile03" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <label for="inputGroupFile06" class="form-label body-text">Selfie dengan KTP</label>
            <input type="file" class="form-control" id="inputGroupFile06" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        </div>
        <div class="col-12 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label body-text">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <footer class="footer mx-0 mt-3 ps-0">
        <div class="row">
            <!-- <div class="d-flex"> -->
            <div class="col mb-3">
                <p class="body-text">Pastikan data yang kamu masukkan telah benar.</p>
            </div>
            <div class="col-sm-12">
                <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-outline-secondary bd-highlight body-text" href="#">Batal</a>
                    <a class="btn btn-outline-secondary bd-highlight body-text" href="#">Ajukan</a>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </footer>
</div>
@endsection