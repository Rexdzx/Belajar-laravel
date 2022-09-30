@extends('layouts.main')

@section('container')
 
    <h1>Halaman {{ $title }}</h1><br>

    @foreach ($posts as $post )
    <article class="mb-5 border-bottom pb-4">
        {{-- ambil $post->slug dari route --}}
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->excerpt }}</p>

        <a href="/posts/{{ $post->slug }}" style="text-decoration:none;">Baca Selengkapnnya</a>
        </article>
    @endforeach

@endsection

