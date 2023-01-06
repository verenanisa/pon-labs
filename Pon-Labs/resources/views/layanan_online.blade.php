@extends('layouts.main')

@section('container')
<div class="container my-3">
    <h3 class="mb-3 title-text-bold">Layanan Online</h3>
    <div class="row">
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Pengajuan Perbaikan Kartu Tanda Penduduk (KTP)</h5>
                    <p class="card-text body-text">Ajukan perbaikan Kartu Tanda Penduduk (KTP) apabila terdapat kesalahan data maupun kerusakan pada KTP.</p>
                    <a href="/perbaikan-ktp" class="btn btn-primary body-text">Ajukan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Pengajuan Perbaikan Kartu Keluarga (KK)</h5>
                    <p class="card-text body-text">Ajukan perbaikan Kartu Keluarga (KK) apabila terdapat kesalahan data maupun kerusakan pada KK.</p>
                    <a href="/perbaikan-kk" class="btn btn-primary body-text">Ajukan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title sub-title-bold">Pengajuan Pembuatan Surat Keterangan Tidak Mampu (SKTM)</h5>
                    <p class="card-text body-text">Ajukan pemohon mengajukan rekomendasi surat keterangan tidak mampu.</p>
                    <a href="/pembuatan-sktm" class="btn btn-primary body-text">Ajukan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection