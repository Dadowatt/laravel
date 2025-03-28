<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('testes.teste');
        return view('voitures.liste');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voitures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('voitures.detail');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
