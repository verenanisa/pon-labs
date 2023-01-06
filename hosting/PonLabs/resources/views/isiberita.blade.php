@extends('layouts.main')

@section('container')
<div class="container berita my-3">
    <h3 class="title-text-bold">{{$berita->judul_berita}}</h3>
    <div class="body-text" style="font-weight: 200px;">
        {!! $berita->isi_berita !!}
    </div>
    <a href="/berita">Lihat berita lainnya</a>
</div>
@endsection