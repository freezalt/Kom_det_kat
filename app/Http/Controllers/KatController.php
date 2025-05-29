<?php

namespace App\Http\Controllers;

use App\Models\Gamintojas;
use App\Models\Kategorija;
use App\Models\Komp_spec;
use App\Models\Komponentas;
use App\Models\Sandelys;
use App\Models\Sarasas;
use App\Models\Tipas;
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
            Komponentas::createkomp($request->only('pavadinimas', 'apibudinimas', 'kaina', 'kategorija_id', 'gamintojas_id',));
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
        
        public function createTipas()
        {
            return view('kat.createBrand');
        }
        public function storeTipas(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                ]);
            Gamintojas::create($request->only('pavadinimas',));
            return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }

        public function createKateg()
        {
            $tip = Tipas::all();
            
            return view('kat.createKateg', compact('tip'));
        }
        public function storeKateg(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                'tipas_id' => 'required|exists:tipas,id',
                ]);
            Komponentas::createkomp($request->only('pavadinimas', 'tipas_id'));
            return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }
}