@extends('layouts.kat')
@section('content')
<div class="container">
<h2 style="text-decoration: underline;">komponentu sarasas</h2>
@if(session('success'))
<div style="color: green">{{ session('success') }}</div>
@endif
<ul>
@foreach($sar as $sarasas)
    <li>
        {{ $sarasas->komponentas->pavadinimas }} - {{ $sarasas->kiekis }} - {{ $sarasas->sandelys->pavadinimas }}
        @auth
        <a href="{{ route('kat.createKompSpec', ['komponentas_id' => $sarasas->komponentas->id]) }}" style="color:darkblue"> ---pridėti Specialią vertę---</a>
        @endauth
    </li>
@endforeach
</ul>
@auth
<a href="{{ route('kat.createSarasas') }}" style="color:darkblue">prideti komponentą</a>
@endauth
</div>
@endsection
