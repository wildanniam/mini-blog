@extends('layouts.main')

@section('container')
<h1> About Wildan's Blog </h1>
<p> {{ $name }} </p>
<p> {{ $email }} </p>
<img src="assets/photo/wildan.png" alt="wildan" class="img-fluid img-thumbnail ">
@endsection