@extends('layouts.kat')
@section('content')
<div class="container">
<h2>Add Contact</h2>
<form method="POST" action="{{ route('kat.store') }}">
@csrf
<div>
<label>Name:</label>
<input type="text" name="pavadinimas" required>
</div>
<button type="submit">Save</button>
</form>
</div>
@endsection