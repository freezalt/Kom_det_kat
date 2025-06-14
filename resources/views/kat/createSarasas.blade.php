@extends('layouts.kat')
@section('content')
<div class="container">
    <h2>pridėti kategorija</h2>
    <form method="POST" action="{{ route('kat.storeSarasas') }}">
        @csrf

        <div>
            <label>kiekis:</label>
            <input type="text" name="kiekis" id="kiekis" required>
        </div>

        <div>
            <label for="sandelys_id">sandelys:</label>
            <select name="sandelys_id" required>
                @foreach ($san as $s)
                    <option value="{{ $s->id }}">{{ $s->pavadinimas }}</option>
                @endforeach
            </select>
            @auth
            <a href="{{ route('kat.createSandelys') }}">pridėti nauja sandeli</a>
            @endauth
        </div>

        <div>
            <label for="komponentas_id">komponentas:</label>
            <select name="komponentas_id" required>
                @foreach ($komp as $Komp)
                    <option value="{{ $Komp->id }}">{{ $Komp->pavadinimas }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">prideti</button>
</form>
</div>
@endsection
