<?php

namespace App\Http\Controllers;

use App\Models\Deposito;
use App\Models\Empleado;
use App\Models\Afiliado;
use Illuminate\Http\Request;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $codAfiliado, string $codEmpleado)
    {
        return view('depositos.createDeposito')->with('codAfiliado', $codAfiliado)
            ->with('codEmpleado', $codEmpleado);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $deposito = new Deposito();
        $deposito->codEmpleado = $request->get('codEmpleado');
        $deposito->codAfiliado = $request->get('codAfiliado');
        $deposito->fechaDeposito = $request->get('fecha');
        $deposito->monto = $request->get('monto');

        $deposito->save();
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $id2)
    {
        $afiliado = Afiliado::find($id);
        $empleado = Empleado::find($id2);
        $depositos = Deposito::all();

        return view('depositos.index')->with('despositos', $depositos)
            ->with('empleado', $empleado)
            ->with('afiliado', $afiliado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
