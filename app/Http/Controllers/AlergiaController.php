<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use Illuminate\Http\Request;

class AlergiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todas_alergias = Alergia::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alergia::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alergia = Alergia::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alergia = Alergia::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alergia = Alergia::find($id);
        $alergia->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alergia = Alergia::find($id);
        $alergia->delete();
    }
}
