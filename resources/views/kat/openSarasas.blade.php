@extends('layouts.kat')
@section('content')
<div class="container">
<h2>komponentu sarasas</h2>
@if(session('success'))
<div style="color: green">{{ session('success') }}</div>
@endif
<ul>
@foreach($sar as $sarasas)
    <li>{{ $sarasas->komponentas->pavadinimas }} - {{ $sarasas->kiekis }} - {{ $sarasas->sandelys->pavadinimas }}</li>
@endforeach
</ul>
@auth
<a href="{{ route('kat.createSarasas') }}">prideti komponentą</a>
@endauth
</div>
@endsection
