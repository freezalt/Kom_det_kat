@extends('layouts.kat')
@section('content')
<div class="container">
<h2>Specifikacijos komponentui: {{ $komp->pavadinimas }}</h2>

    @foreach($specs as $spec)
        <div>
            <strong>{{ $spec->spec_pavad }}:</strong> {{ $spec->spec_verte }}
        </div>
    @endforeach
</div>
@endsection
