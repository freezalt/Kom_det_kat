<?php

namespace App\Http\Controllers;

use App\Models\Komponentas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KatController extends Controller
{
    public function index()
        {
            $komp = Komponentas::all();
            return view('kat.index', compact('komp'));
        }

    public function create()
        {
            return view('kat.create');
        }

    public function store(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                ]);

        komponentas::create($request->only('pavadinimas'));
        return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }
}