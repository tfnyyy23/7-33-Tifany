@extends('layouts.main')

@section('container')

    <img src="images/{{ $gambar }}" alt="{{ $nama }}" width="200px">
    <h5> Name  : {{ $nama }} </h5>
    <h5> Email : {{ $email }} </h5>
 

@endsection
