<?php

namespace App\Http\Controllers;

use App\Models\Kompanija;
use Illuminate\Http\Request;

class KompanijaController extends Controller
{
    public function ucitavanje()
    {
        $kompanije = Kompanija::all();

        return response()->json([
            'kompanije' => $kompanije
        ]);
    }

    public function parfemi_kompanije(Request $request)
    {
        $kompanija_id = $request->input('kompanija_id');
        $parfemi = Kompanija::find($kompanija_id)->parfemi()->get();

        return response()->json([
            'parfemi' => $parfemi
        ]);
    }
}
