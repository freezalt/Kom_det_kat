@extends('layouts.kat')
@section('content')
<div class="container">
    <h2>pridėti tipa</h2>
    <form method="POST" action="{{ route('kat.storeTipas') }}">
        @csrf

        <div>
            <label>pavadinimas:</label>
            <input type="text" name="pavadinimas" id="pavadinimas" required>
        </div>

        <button type="submit">prideti</button>
</form>
</div>
@endsection