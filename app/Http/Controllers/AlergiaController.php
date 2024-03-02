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
        return view('site.admin.allergy-list', compact('todas_alergias'));
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

        $todas_alergias = Alergia::all();
        //return view('site.admin.allergy-list', compact('todas_alergias'))->with('success', 'Cadastro realizado com sucesso!');
        return redirect()->route('alergia.index', compact('todas_alergias'));
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
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alergia = Alergia::find($id);
        $alergia->delete();
        $todas_alergias = Alergia::all();
        return redirect()->route('alergia.index')->with('success', 'Item eliminado com sucesso!');

    }
}
