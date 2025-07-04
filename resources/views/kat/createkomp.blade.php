@extends('layouts.kat')
@section('content')
<div class="container">
    <h2 style="text-decoration: underline;">pridėti komponenta</h2>
    <form method="POST" action="{{ route('kat.storekomp') }}">
        @csrf

        <div>
            <label>pavadinimas:</label>
            <input type="text" name="pavadinimas" id="pavadinimas" required>
        </div>

        <div>
            <label>apibudinimas:</label>
            <input type="text" name="apibudinimas" id="apibudinimas" required>
        </div>

        <div>
            <label>kaina:</label>
            <input type="text" name="kaina" id="kaina" required>
        </div>

        <div>
            <label for="kategorija_id">Kategorija:</label>
            <select name="kategorija_id" required>
                @foreach ($kategorijos as $kategorija)
                    <option value="{{ $kategorija->id }}">{{ $kategorija->pavadinimas }}</option>
                @endforeach
            </select>
            @auth
            <a href="{{ route('kat.createKateg') }}" style="color:darkblue">pridėti nauja Kategoriją</a>
            @endauth
        </div>

        <div>
            <label for="gamintojas_id">Gamintojas:</label>
            <select name="gamintojas_id" required>
                @foreach ($gamintojai as $gamintojas)
                    <option value="{{ $gamintojas->id }}">{{ $gamintojas->pavadinimas }}</option>
                @endforeach
            </select>
            @auth
            <a href="{{ route('kat.createBrand') }}" style="color:darkblue">pridėti nauja gamintoją</a>
            @endauth
        </div>

        <button type="submit" style="color:green;">pridėti</button>
    </form>
</div>
@endsection
