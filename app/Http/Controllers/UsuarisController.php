<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
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
    public function generarPDFUsuari($email)
    {
        $usuari = Usuaris::findOrFail($email);
        
        $html = view('detalle_usuaris_pdf', compact('usuari'))->render();
        
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        
        return $dompdf->stream('detalle_usuaris.pdf');
    }
    public function index_basic()
    {
        $dades_usuaris = Usuaris::all();
        return view('llista_usuaris_basic', compact('dades_usuaris'));
    }
    public function show_basic($email)
    {
        $dades_usuaris = Usuaris::findOrFail($email);
        return view('mostra_usuaris_basic',compact('dades_usuaris'));
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
    public function show($email)
    {
        $dades_usuaris = Usuaris::findOrFail($email);
        return view('mostra_usuaris',compact('dades_usuaris'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($email)
    {
        $dades_usuaris = Usuaris::findOrFail($email);
        return view('actualitza_usuaris',compact('dades_usuaris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $email)
    {
        $noves_dades_usuaris = $request->validate([
            'nom_i_cognoms' => 'required',
            'email' => 'required',
            'contrasenya' => 'required',
            'tipus' => 'required',
            'darrera_hora_d_entrada' => 'required',
            'darrera_hora_de_sortida' => 'required',
            ]);
            Usuaris::findOrFail($email)->update($noves_dades_usuaris);
            return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($email)
    {
        $usuaris = Usuaris::findOrFail($email)->delete();
        return view('dashboard');
    }
}
