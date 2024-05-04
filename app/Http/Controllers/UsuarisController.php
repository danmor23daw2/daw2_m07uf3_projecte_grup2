<?php

namespace App\Http\Controllers;

use App\Models\Usuaris;
use Illuminate\Http\Request;

class UsuarisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_usuaris = Usuaris::all();
        return view('llista_usuaris', compact('dades_usuaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crear_usuaris');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
            'nom_i_cognoms' => 'required',
            'email' => 'required',
            'contrasenya' => 'required',
            'tipus' => 'required',
            'darrera_hora_d_entrada' => 'required',
            'darrera_hora_de_sortida' => 'required',
        ]);
        $usuaris = Usuaris::create($nouUsuari);
        return view('dashboard');
        }

    /**
     * Display the specified resource.
     */
    public function show(Usuaris $usuaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuaris $usuaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuaris $usuaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuaris $usuaris)
    {
        //
    }
}
