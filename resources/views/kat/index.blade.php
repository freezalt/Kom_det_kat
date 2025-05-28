@extends('layouts.kat')
@section('content')
<div class="container">
<h2>Contact List</h2>
@if(session('success'))
<div style="color: green">{{ session('success') }}</div>
@endif
<ul>
@foreach($komp as $komponent)
<li>{{ $komp->name }}</li>
@endforeach
</ul>
@auth
<a href="{{ route('kat.create') }}">Add New Contact</a>
@endauth
</div>
@endsection