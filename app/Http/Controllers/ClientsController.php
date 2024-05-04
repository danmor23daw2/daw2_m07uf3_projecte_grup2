<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_clients = Clients::all();
        return view('llista_clients', compact('dades_clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea_clients');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'DNI_client' => 'required',
            'nom_i_cognoms' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreça' => 'required',
            'ciutat' => 'required',
            'email' => 'required',
            'numero_del_permis_de_conduccio' => 'required',
            'punts_del_permis_de_conduccio' => 'required',
            'punts_del_permis_de_conduccio' => 'required',
            'tipus_de_targeta' => 'required',
            'numero_de_la_targeta' => 'required',
        ]);
        $client = Clients::create($nouClient);
        return view('dashboard');
        }

    /**
     * Display the specified resource.
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
