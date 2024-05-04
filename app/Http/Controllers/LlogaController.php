<?php

namespace App\Http\Controllers;

use App\Models\Lloga;
use Illuminate\Http\Request;

class LlogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_lloga = Lloga::all();
        return view('llista_lloga', compact('dades_lloga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea_lloga');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $noullogas = $request->validate([
            'DNI_client' => 'required',
            'matricula_auto' => 'required',
            'data_del_prestec' => 'required',
            'data_de_devolucio' => 'required',
            'lloc_de_devolucio' => 'required',
            'preu_per_dia' => 'required',
            'email' => 'required',
            'prestec_amb_retorn_de_diposit_ple' => 'required',
            "tipus_dassegurança" => 'required',
        ]);
        $llogas = Lloga::create($noullogas);
        return view('dashboard');
        }

    /**
     * Display the specified resource.
     */
    public function show(Lloga $lloga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lloga $lloga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lloga $lloga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lloga $lloga)
    {
        //
    }
}
