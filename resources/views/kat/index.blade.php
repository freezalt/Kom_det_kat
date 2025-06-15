@extends('layouts.kat')
@section('content')
<div class="container">
<h2>komponentu sarasas</h2>
@if(session('success'))
<div style="color: green">{{ session('success') }}</div>
@endif
<ul>
@foreach($komp as $komponent)
    <li><a href="{{ route('kat.specSarasas', $komponent->id)}}">{{ $komponent->pavadinimas }} - {{ $komponent->gamintojas->pavadinimas }}</li>
@endforeach
</ul>
@auth
<a href="{{ route('kat.createkomp') }}">pridėti nauja komponentą</a>
@endauth
@auth
<a href="{{ route('kat.openSarasas') }}">eiti i sarasa</a>
@endauth
</div>
@endsection
