@extends('layouts.kat')
@section('content')
<div class="container">
    <h2 style="text-decoration: underline;">pridėti speciąlę vertę</h2>
    <form method="POST" action="{{ route('kat.storeSpec') }}">
        @csrf
        <input type="hidden" name="komponentas_id" value="{{ $komponentas_id }}">
        <div>
            <label>Specialios vertės pavadinimas:</label>
            <input type="text" name="spec_pavad" id="spec_pavad" required>
        </div>

        <div>
            <label>speciali vertė:</label>
            <input type="text" name="spec_verte" id="spec_verte" required>
        </div>

        <button type="submit" style="color:green;">pridėti</button>
</form>
</div>
@endsection
