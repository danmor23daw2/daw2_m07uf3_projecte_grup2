<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
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
    public function generarPDFClient($DNI_client)
    {
        // Obtiene los datos del auto específico
        $client = Clients::findOrFail($DNI_client);
        
        // Carga la vista en la que tienes el detalle del auto en HTML
        $html = view('detalle_clients_pdf', compact('client'))->render();
        
        // Configura Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        
        // Renderiza el HTML en PDF
        $dompdf->render();
        
        // Envía el PDF al navegador
        return $dompdf->stream('detalle_clients.pdf');
    }
    public function index_basic()
    {
        $dades_clients = Clients::all();
        return view('llista_clients_basic', compact('dades_clients'));
    }

    public function show_basic($DNI_client)
    {
        $dades_clients = Clients::findOrFail($DNI_client);
        return view('mostra_clients_basic',compact('dades_clients'));
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
            'tipus_de_targeta' => 'required',
            'numero_de_la_targeta' => 'required',
        ]);
        $client = Clients::create($nouClient);
        return view('dashboard');
        }

    /**
     * Display the specified resource.
     */
    public function show($DNI_client)
    {
        $dades_clients = Clients::findOrFail($DNI_client);
        return view('mostra_clients',compact('dades_clients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($DNI_client)
    {
        $dades_clients = Clients::findOrFail($DNI_client);
        return view('actualitza_clients',compact('dades_clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $DNI_client)
    {
        $noves_dades_clients = $request->validate([
            'DNI_client' => 'required',
            'nom_i_cognoms' => 'required',
            'edat' => 'required',
            'telefon' => 'required',
            'adreça' => 'required',
            'ciutat' => 'required',
            'email' => 'required',
            'numero_del_permis_de_conduccio' => 'required',
            'punts_del_permis_de_conduccio' => 'required',
            'tipus_de_targeta' => 'required',
            'numero_de_la_targeta' => 'required',
            ]);
            Clients::findOrFail($DNI_client)->update($noves_dades_clients);
            return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($DNI_client)
    {
        $client = Clients::findOrFail($DNI_client)->delete();
        return view('dashboard');
    }
}
