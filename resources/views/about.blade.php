@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1><br>
    <h2>{{ $text1 }}</h2>
    <h3>{{ $text2 }}</h3>
<img src="{{ $image }}" alt="{{ $text1 }}" width="200">
@endsection