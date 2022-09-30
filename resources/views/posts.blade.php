@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"]}}</h2>
    
    <p>Kategori : <a href="/kategori/{{ $post->kategori->slug }}">{{ $post->kategori->nama }}</a></p>

    <p class="mt-4">{!! $post->body !!}</p>
</article>
        <a href="/blog">Kembali</a>
@endsection

{{-- {{ dua kurawal tidak boleh ada karakter html seperti <p> }} --}}