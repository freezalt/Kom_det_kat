@extends('layouts.kat')
@section('content')
<div class="container">
    <h2 style="text-decoration: underline;">pridėti kategorija</h2>
    <form method="POST" action="{{ route('kat.storeKateg') }}">
        @csrf

        <div>
            <label>pavadinimas:</label>
            <input type="text" name="pavadinimas" id="pavadinimas" required>
        </div>

        <div>
            <label for="tipas_id">tipas:</label>
            <select name="tipas_id" required>
                @foreach ($tipai as $Tipas)
                    <option value="{{ $Tipas->id }}">{{ $Tipas->pavadinimas }}</option>
                @endforeach
            </select>
            @auth
            <a href="{{ route('kat.createTipas') }}" style="color:darkblue">pridėti nauja Tipa</a>
            @endauth
        </div>

        <button type="submit" style="color:green;">prideti</button>
</form>
</div>
@endsection
