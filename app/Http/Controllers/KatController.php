<?php

namespace App\Http\Controllers;

use App\Models\Komponentas;
use App\Models\Kategorija;
use App\Models\Gamintojas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KatController extends Controller
{
    public function index()
        {
            $komp = Komponentas::all();
            return view('kat.index', compact('komp'));
        }

        public function createkomp()
        {
            $kategorijos = Kategorija::all();
            $gamintojai = Gamintojas::all();
            
            return view('kat.createkomp', compact('kategorijos', 'gamintojai'));
        }
        public function storekomp(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                'apibudinimas' => 'required|string',
                'kaina' => 'required|numeric',
                'kategorija_id' => 'required|exists:kategorija,id',
                'gamintojas_id' => 'required|exists:gamintojas,id',
                ]);
            Komponentas::createkomp($request->only('pavadinimas',));
            return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }
        
        public function createBrand()
        {
            return view('kat.createBrand');
        }
        public function storeBrand(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                ]);
            Gamintojas::create($request->only('pavadinimas',));
            return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }
}