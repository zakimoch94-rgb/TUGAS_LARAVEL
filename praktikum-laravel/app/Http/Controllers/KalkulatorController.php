<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga()
    {
        return view('segitiga', ['luas' => null]);
    }

    public function prosesSegitiga(Request $request)
    {
        $request->validate([
            'alas'   => 'required|numeric|min:0',
            'tinggi' => 'required|numeric|min:0',
        ]);

        $luas = 0.5 * $request->alas * $request->tinggi;

        return view('segitiga', ['luas' => $luas]);
    }
}
