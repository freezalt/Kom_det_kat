@extends('layouts.kat')
@section('content')
<div class="container">
    <h2>pridėti kategorija</h2>
    <form method="POST" action="{{ route('kat.storeKateg') }}">
        @csrf

        <div>
            <label>pavadinimas:</label>
            <input type="text" name="pavadinimas" id="pavadinimas" required>
        </div>

        <div>
            <label for="tipas_id">tipas:</label>
            <select name="tipas_id" required>
                @foreach ($tip as $Tipas)
                    <option value="{{ $Tipas->id }}">{{ $Tipas->pavadinimas }}</option>
                @endforeach
            </select>
            @auth
            <a href="{{ route('kat.createTipas') }}">pridėti nauja Tipa</a>
            @endauth
        </div>

        <button type="submit">prideti</button>
</form>
</div>
@endsection