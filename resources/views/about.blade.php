@extends('layouts.main')

@section('contents')

	<h1>Halaman About</h1>
	<h3>{{ $name }}</h3>
	<p>{{ $email }}</p>
	<img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
	
@endsection