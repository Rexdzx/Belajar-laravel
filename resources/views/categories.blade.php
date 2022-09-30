@extends('layouts.main')

@section('container')
 
    <h1>Kategori Lainnya</h1><br>

    {{-- categories berasal dari route --}}
    @foreach ($categories as $kategori )

    <ul>
        <li>
            <h2><a href="/kategori/{{ $kategori->slug }}">{{ $kategori->nama }}</a></h2>
        </li>
    </ul>
        {{-- ambil $post->slug dari route --}}
    @endforeach

@endsection

