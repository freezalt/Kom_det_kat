@extends('layouts.kat')
@section('content')
<div class="container">
<h2 style="text-decoration: underline;">
    Komponentų sąrašas:
</h2>


@if(session('success'))
<div style="color: green">{{ session('success') }}</div>
@endif
<ul>
@foreach($komp as $komponent)
    <li><a href="{{ route('kat.specSarasas', $komponent->id)}}">{{ $komponent->pavadinimas }} - {{ $komponent->gamintojas->pavadinimas }} - {{ $komponent->kaina }}E - {{ $komponent->kategorija->pavadinimas }}</li>
@endforeach
</ul>
@auth
<a href="{{ route('kat.createkomp') }}" style="color:darkblue">pridėti nauja komponentą</a><br>
@endauth
@auth
<a href="{{ route('kat.openSarasas') }}" style="color:brown">eiti į bendrą sąrašą</a>
@endauth
</div>
@endsection
