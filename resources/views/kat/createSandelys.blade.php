@extends('layouts.kat')
@section('content')
<div class="container">
    <h2 style="text-decoration: underline;">Pridėti sandelį</h2>
    <form method="POST" action="{{ route('kat.storeSandelys') }}">
        @csrf

        <div>
            <label>Adresas:</label>
            <input type="text" name="pavadinimas" id="pavadinimas" required>
        </div>

        <button type="submit" style="color:green;">pridėti</button>
</form>
</div>
@endsection
