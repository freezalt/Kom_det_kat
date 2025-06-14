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
            $komp = Komponentas::with('gamintojas')->get();
            return view('kat.index', compact('komp'));
        }

        public function createkomp()
        {
            $kategorijos = Kategorija::all();
            $gamintojai = Gamintojas::all();

            return view('kat.createkomp', compact('kategorijos', 'gamintojai'));
        }
        public function storekomp(Request $request){
            $request->validate([
            'pavadinimas' => 'required|string',
            'apibudinimas' => 'required|string',
            'kaina' => 'required|numeric',
            'kategorija_id' => 'required|exists:kategorija,id',
            'gamintojas_id' => 'required|exists:gamintojas,id',
            ]);

        try {
            $komp = Komponentas::create($request->only(
            'pavadinimas',
                'apibudinimas',
                'kaina',
                'kategorija_id',
                'gamintojas_id'
        ));

        if (!$komp) {
            return back()->withErrors(['error' => 'Failed to insert record into database.']);
        }

        return redirect()->route('kat.index')->with('success', 'Komponentas pridėtas sėkmingai!');
    } catch (\Exception $e) {
        dd($e->getMessage()); // this shows the exact error
    }
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
            return view('kat.createTipas');
        }
        public function storeTipas(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                ]);
            Tipas::create($request->only('pavadinimas',));
            return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }

        public function createKateg()
        {
            $tipai = Tipas::all();

            return view('kat.createKateg', compact('tipai'));
        }
        public function storeKateg(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                'tipas_id' => 'required|exists:tipas,id',
                ]);
            Kategorija::create($request->only('pavadinimas', 'tipas_id'));
            return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }

        public function createSandelys()
        {
            $san = Sandelys::all();

            return view('kat.createSandelys', compact('san'));
        }
        public function storeSandelys(Request $request)
        {
            $request->validate([
                'pavadinimas' => 'required|string',
                ]);
            Sandelys::create($request->only('pavadinimas',));
            return redirect()->route('kat.index')->with('success', 'Contact added successfully!');
        }

        public function openSarasas()
        {
            $sar = Sarasas::all();
            $sar = Sarasas::with('sandelys')->get();
            $sar = Sarasas::with('komponentas')->get();
            return view('kat.openSarasas', compact('sar'));
        }
        public function createSarasas()
        {
            $sar = Sarasas::all();
            $san = Sandelys::all();
            $komp = Komponentas::all();
            return view('kat.createSarasas', compact('sar', 'san', 'komp'));
        }
        public function storeSarasas(Request $request)
{
    $request->validate([
        'kiekis' => 'required|numeric',
        'sandelys_id' => 'required|exists:sandelys,id',
        'komponentas_id' => 'required|exists:komponentas,id',
    ]);

    Sarasas::create($request->only('kiekis', 'sandelys_id', 'komponentas_id'));

    return redirect()->route('kat.openSarasas')->with('success', 'Sąrašas pridėtas sėkmingai!');
}

}
