@extends('layouts.kat')
@section('content')
<div class="container">
    <h2>Add Contact</h2>
    <form method="POST" action="{{ route('kat.store') }}">
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

        <button type="submit">Save</button>
</form>
</div>
@endsection