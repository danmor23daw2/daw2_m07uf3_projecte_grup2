<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_autos = Autos::all();
        return view('llista', compact('dades_autos'));
    }
    public function generarPDFAutos($matricula_auto)
    {
        // Obtiene los datos del auto específico
        $auto = Autos::findOrFail($matricula_auto);
        
        // Carga la vista en la que tienes el detalle del auto en HTML
        $html = view('detalle_auto_pdf', compact('auto'))->render();
        
        // Configura Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        
        // Renderiza el HTML en PDF
        $dompdf->render();
        
        // Envía el PDF al navegador
        return $dompdf->stream('detalle_auto.pdf');
    }
    public function index_basic()
    {
        $dades_autos = Autos::all();
        return view('llista_basica', compact('dades_autos'));
    }
    public function show_basic($matricula_auto)
    {
        $dades_autos = Autos::findOrFail($matricula_auto);
        return view('mostra_basic',compact('dades_autos'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouAuto = $request->validate([
            'matricula_auto' => 'required',
            'numero_de_bastidor' => 'required',
            'marca' => 'required',
            'model' => 'required',
            'color' => 'required',
            'nombre_de_places' => 'required',
            'nombre_de_portes' => 'required',
            'grandaria_del_maleter' => 'required',
            'tipus_de_combustible' => 'required',
        ]);
        $autos = Autos::create($nouAuto);
        return view('dashboard');
        }

    /**
     * Display the specified resource.
     */
    public function show($matricula_auto)
    {
        $dades_autos = Autos::findOrFail($matricula_auto);
        return view('mostra',compact('dades_autos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($matricula_auto)
    {
        $dades_autos = Autos::findOrFail($matricula_auto);
        return view('actualitza',compact('dades_autos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $matricula_auto)
    {
        $noves_dades_autos = $request->validate([
            'matricula_auto' => 'required',
            'numero_de_bastidor' => 'required',
            'marca' => 'required',
            'model' => 'required',
            'color' => 'required',
            'nombre_de_places' => 'required',
            'nombre_de_portes' => 'required',
            'grandaria_del_maleter' => 'required',
            'tipus_de_combustible' => 'required',
            ]);
            Autos::findOrFail($matricula_auto)->update($noves_dades_autos);
            return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($matricula_auto)
    {
        $autos = Autos::findOrFail($matricula_auto)->delete();
        return view('dashboard');
    }
}
