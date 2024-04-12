<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Empleado;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $afiliados = Afiliado::all();
        return view('afiliado.index')->with('afiliados', $afiliados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('afiliado.afiliadoForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $afiliado = new Afiliado();
        $afiliado->codAfiliado = $request->get('codAfiliado');
        $afiliado->nombre = $request->get('nombre');
        $afiliado->apellido = $request->get('apellido');
        $afiliado->ciudad = $request->get('ciudad');
        $afiliado->telefono = $request->get('telefono');
        $afiliado->edad = $request->get('edad');
        $afiliado->save();
        return redirect('/afiliados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = Empleado::find($id);
        $afiliados = Afiliado::all();
        return view('afiliado.movimientos')->with('empleado', $empleado)->with('afiliados', $afiliados);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $afiliados = Afiliado::find($id);
        return view('afiliado.afiliadoForm')->with('afiliados', $afiliados);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $afiliado = Afiliado::find($id);
        $afiliado->codAfiliado = $request->get('codAfiliado');
        $afiliado->nombre = $request->get('nombre');
        $afiliado->apellido = $request->get('apellido');
        $afiliado->ciudad = $request->get('ciudad');
        $afiliado->telefono = $request->get('telefono');
        $afiliado->edad = $request->get('edad');
        $afiliado->save();
        return redirect('/afiliados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Afiliado $afiliado)
    {
        $afiliado->delete();
        return redirect('/afiliados');
    }
}
