<?php

namespace App\Http\Controllers;

use App\Models\ingatlanok;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $osszesIngatlan  = DB::table('ingatlanoks')->select('*')->join('kategoriaks', 'kategoriaks.id',"=", 'kategoria')->get();
        return $osszesIngatlan;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $ujIngatlan = ingatlanok::new();
        $ujIngatlan->kategoria = $request->kategoria;
        $ujIngatlan->leiras = $request->leiras;
        $ujIngatlan->hirdetesDatuma = $request->hirdetesDatuma;
        $ujIngatlan->tehermentes = $request->tehermentes;
        $ujIngatlan->ar = $request->ar;
        $ujIngatlan->kepUrl = $request->kepUrl;
        $ujIngatlan->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ingatlanok $ingatlanok)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ingatlanok $ingatlanok)
    {
        $ingatlan  = ingatlanok::find($ingatlanok->id);
        $ingatlan->delete();
    }
}
