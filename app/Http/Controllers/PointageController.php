<?php

namespace App\Http\Controllers;

use App\Models\pointage;
use Illuminate\Http\Request;

class PointageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pointages = pointage::all();
        return view('pointages.index', compact('pointages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pointages.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pointage = new Pointage();
        $pointage->nom = $request->input('nom');
        $pointage->prenom = $request->input('prenom');
        $pointage->grade = $request->input('grade');
        $pointage->save();
        return redirect()->route('pointage.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(pointage $pointage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pointage $pointage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pointage $pointage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pointage $pointage)
    {
        //
    }
}
