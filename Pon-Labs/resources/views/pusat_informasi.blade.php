@extends('layouts.main')

@section('container')
<!-- News -->
<div class="container my-3">
    <h3 class="title-text-bold">Pusat Informasi</h3>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button sub-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Langkah Pembuatan Kartu Tanda Penduduk (KTP)
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h6 class="body-text">Langkah Pembuatan E-KTP : <br>
                        1. Fotokopi dokumen yang dibutuhkan.<br>
                        2. Datangi Dinas Kependudukan dan Pencatatan Sipil (Dukcapil) setempat. <br>
                        3. Cari loket untuk mengurus KTP dan KK. Lalu, serahkan salinan dokumen persyaratan pembuatan KTP. <br>
                        4. Lakukan foto dan sidik jari.<br>
                        4. Setelah semua dokumen persyaratan yang diberikan selesai diperiksa dan sesuai dengan ketentuan serta sesi foto dan sidik jari telah dilakukan, Anda akan diberikan resi untuk pengambilan e-KTP baru atau yang sudah diperbaiki. <br>
                        5. Silahkan ambil e-KTP Anda di kantor Dukcapil</h6>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed sub-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Langkah Perbaikan Kartu Tanda Penduduk (KTP)
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h6 class="body-text">Langkah Mengurus Koreksi Data e-KTP : <br>
                        1. Bawa semua dokumen persyaratan yang diperlukan seperti e-KTP lama yang ingin diperbaiki, fotokopi kartu keluarga, dan lainnya (menyesuaikan dengan keperluan Anda). <br>
                        2. Datangi Dinas Kependudukan dan Pencatatan Sipil (Dukcapil) setempat. <br>
                        3. Cari loket untuk mengurus KTP dan KK. Lalu, jelaskan sedetail mungkin tentang ganti data e-KTP yang salah atau update data e-KTP. <br>
                        4. Serahkan semua dokumen perubahan data e-KTP  kepada petugas Dukcapil. <br>
                        4. Setelah semua dokumen persyaratan yang diberikan selesai diperiksa dan sesuai dengan ketentuan, Anda akan diberikan resi untuk pengambilan e-KTP baru atau yang sudah diperbaiki. <br>
                        5. Silahkan ambil e-KTP Anda di kantor Dukcapil</h6>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed sub-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Langkah Pembuatan Kartu Keluarga (KK)
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h6 class="body-text">Langkah Mengurus Pembuatan Kartu Keluarga (KK) : <br>
                        1. Meminta Surat Pengantar Pembuatan Kartu Keluarga Baru ke RT setempat dan dilanjutkan di stempel ke RW <br>
                        2. Mendatangi kantor kelurahan setempat untuk mengisi dan menandatangani formulir Permohonan Pembuatan Kartu Keluarga dengan membawa persyaratan-persyaratan </h6>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed sub-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Langkah Perbaikan Kartu Keluarga (KK)
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h6 class="body-text">Langkah Mengurus Perbaikan Kartu Keluarga (KK) : <br>
                        1. Datang membawa dokumen persyaratan yang dibutuhkan. <br>
                        2. Menunggu antrian untuk mendapatkan layanan. <br>
                        3. Mengisi dan menyerahkan formulir perubahan nama. <br>
                        4. Menyerahkan kepada petugas semua dokumen yang menjadi persyaratan pengubahan nama pada kartu keluarga. <br>
                        5. Petugas akan mulai menginput ralat data yang ada, dan akan memanggil nama Anda kembali ketika kartu keluarga baru sudah siap.<br>
                    </h6>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed sub-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Langkah Pembuatan Surat Keterangan Tidak Mampu (SKTM)
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h6 class="body-text">Langkah Membuat Surat Keterangan Tidak Mampu (SKTM) : <br>
                        1. Pemohon mengajukan rekomendasi surat keterangan tidak mampu dengan membawa berkas persyaratan kepada petugas penerima berkas di kantor desa atau kelurahan <br>
                        2. Petugas akan menerima berkas dan melakukan verifikasi kelengkapannya <br>
                        3. Kasi sosial akan memvalidasi dan memberikan persetujuan <br>
                        4. Jika kelengkapan berkas dan penilaian tidak sesuai, berkas akan dikembalikan ke Pemohon. Jika berhasil, berkas akan masuk ke meja Lurah <br>
                        5. Lurah memberikan tanda tangan dan stempel persetujuan <br>
                        6. Pemohon mengambil surat keterangan tidak mampu <br>
                        7. Jika terjadi masalah, maka pemohon dapat mengajukan permohonannya ke beberapa alamat seperti email, nomor telepon dan website kelurahan.
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of News -->
@endsection