<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Lloga;
use App\Models\Autos;
use App\Models\Clients;
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
    public function generarPDFLloga($matricula_auto)
    {
        $lloga = Lloga::findOrFail($matricula_auto);
        
        $html = view('detalle_lloga_pdf', compact('lloga'))->render();
        
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        
        $dompdf->render();
        
        return $dompdf->stream('detalle_lloga.pdf');
    }
    public function index_basic()
    {
        $dades_lloga = Lloga::all();
        return view('llista_lloga_basic', compact('dades_lloga'));
    }
    public function show_basic($matricula_auto)
    {
        $dades_lloga = Lloga::findOrFail($matricula_auto);
        return view('mostra_lloga_basic',compact('dades_lloga'));
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
        $request->validate([
            'matricula_auto' => 'required',
            'DNI_client' => 'required',
            'data_del_prestec' => 'required',
            'data_de_devolucio' => 'required',
            'lloc_de_devolucio' => 'required',
            'preu_per_dia' => 'required',
            'email' => 'required',
            'prestec_amb_retorn_de_diposit_ple' => 'required',
            'tipus_dassegurança' => 'required',
        ]);
        $autosExiste = Autos::where('matricula_auto', $request->matricula_auto)->exists();
        $clientExiste = Clients::where('DNI_client', $request->DNI_client)->exists();
        
        if (!$autosExiste) {
            return back()->withInput()->withErrors(['matricula_auto' => 'El auto no existe']);
        }
        if (!$clientExiste) {
            return back()->withInput()->withErrors(['DNI_client' => 'El cliente no existe']);
        }
    
        Lloga::create($request->all());
    
        return redirect()->route('dashboard');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($DNI_client)
    {
        $dades_lloga = Lloga::findOrFail($DNI_client);
        return view('mostra_lloga',compact('dades_lloga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($matricula_auto)
    {
        $dades_lloga = Lloga::findOrFail($matricula_auto);
        return view('actualitza_lloga',compact('dades_lloga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $matricula_auto)
    {
        $noves_dades_lloga = $request->validate([
            'matricula_auto' => 'required',
            'DNI_client' => 'required',
            'data_del_prestec' => 'required',
            'data_de_devolucio' => 'required',
            'lloc_de_devolucio' => 'required',
            'preu_per_dia' => 'required',
            'email' => 'required',
            'prestec_amb_retorn_de_diposit_ple' => 'required',
            "tipus_dassegurança" => 'required',
            ]);
            Lloga::findOrFail($matricula_auto)->update($noves_dades_lloga);
            return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($matricula_auto)
    {
        $lloga = Lloga::findOrFail($matricula_auto)->delete();
        return view('dashboard');
    }
}
