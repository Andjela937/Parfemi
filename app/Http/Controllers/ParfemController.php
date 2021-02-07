<?php

namespace App\Http\Controllers;

use App\Models\Kompanija;
use App\Models\Parfem;
use Illuminate\Http\Request;

class ParfemController extends Controller
{
    public function ucitavanje()
    {
        $parfemi = Parfem::all();

        return response()->json([
            'parfemi' => $parfemi
        ]);
    }

    public function izmena(Request $request)
    {
        $id = $request->id;
        $cena = $request->cena;
        Parfem::where('id', $id)->update(['cena' => $cena]);

        return response()->json([
            'message' => true,
        ]);
    }

    public function dodavanje(Request $request)
    {
        $model = $request->input('model');
        $cena = $request->input('cena');
        $slika = $request->input('slika');
        $kompanija_id = $request->input('kompanija_id');

        Parfem::insert([
            'cena' => $cena,
            'model' => $model,
            'slika' => $slika,
            'kompanija_id' => $kompanija_id
        ]);
        Kompanija::find($kompanija_id)->increment('broj_parfema', 1);
        return response()->json([
            'message' => true,
        ]);
    }

    public function brisanje(Request $request)
    {
        $id = $request->id;
//        Kompanija::find(3);
        $kompanija_id = Parfem::find($id)->kompanija()->get()[0]->id;
        Kompanija::find($kompanija_id)->decrement('broj_parfema', 1);
        Parfem::find($id)->delete();

        return response()->json([
            'message' => true,
        ]);
    }
}
