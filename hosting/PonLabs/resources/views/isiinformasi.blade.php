@extends('layouts.main')

@section('container')
<div class="container berita my-3">
    <h3 class="title-text-bold">{{$informasi->judul_pengumuman}}</h3>
    <div class="body-text" style="font-weight: 200px;">
        {!! $informasi->isi_pengumuman !!}
    </div>
    <a href="/informasi">Lihat pengumuman lainnya</a>
</div>
@endsection