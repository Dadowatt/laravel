<?php

namespace App\Http\Controllers;

use App\Models\pointage;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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
        $request->validate([
            'nom' => 'required |Max:45|Min:3',
            'prenom' => 'required |Max:45|Min:3',
            'grade' => 'required |Max:45|Min:3',
        ]);
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
        return view('pointages.detail', compact('pointage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pointage $pointage)
    {
        return view('pointages.edit', compact('pointage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pointage $pointage)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'grade' => 'required',
        ]);
        
        $pointage->nom = $request->input('nom');
        $pointage->prenom = $request->input('prenom');
        $pointage->grade = $request->input('grade');
        $pointage->save();
        return redirect()->route('pointage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pointage $pointage)
    {
        $pointage->delete();
        return redirect()->route('pointage.index');
    }
}
