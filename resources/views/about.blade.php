@extends('layouts/main')

@section('container')
    <h1>Halaman About</h1>
    <h3> {{ $nama }} </h3>
    <h3> {{ $alamat }} </h3>
    <img src="img/{{ $image }} " width="200">
@endsection