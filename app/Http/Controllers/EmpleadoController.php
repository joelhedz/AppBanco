<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.empleadoForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado =  new Empleado();
        $empleado->CodEmpleado =  $request->get('codEmpleado');
        $empleado->nombre =  $request->get('nombre');
        $empleado->apellido =  $request->get('apellido');
        $empleado->nivel =  $request->get('nivel');
        $empleado->telefono =  $request->get('telefono');
        $empleado->save();
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idEmpleado)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $idEmpleado)
    {
        $empleado = Empleado::find($idEmpleado);
        return view('empleado.empleadoForm')->with('empleado', $empleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idEmpleado)
    {
        $empleado = Empleado::find($idEmpleado);
        $empleado->codEmpleado =  $request->get('codEmpleado');
        $empleado->nombre =  $request->get('nombre');
        $empleado->apellido =  $request->get('apellido');
        $empleado->nivel =  $request->get('nivel');
        $empleado->telefono =  $request->get('telefono');
        $empleado->save();
        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idEmpleado)
    {
        $empleado = Empleado::find($idEmpleado);
        $empleado->delete();
        return redirect('/empleados');
    }
}
