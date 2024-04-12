<?php

namespace App\Http\Controllers;

use App\Models\Retiro;
use Illuminate\Http\Request;
use App\Models\Afiliado;
use App\Models\Empleado;

class RetiroController extends Controller
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
        return view('retiros.createRetiro')->with('codEmpleado', $codEmpleado)
            ->with('codAfiliado', $codAfiliado);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $retiro = new Retiro();
        $retiro->codEmpleado = $request->get('codEmpleado');
        $retiro->codAfiliado = $request->get('codAfiliado');
        $retiro->fechaRetiro = $request->get('fecha');
        $retiro->monto = $request->get('monto');

        $retiro->save();
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idAfiliado, string $idEmpleado)
    {
        $afiliado = Afiliado::find($idAfiliado);
        $empleado = Empleado::find($idEmpleado);
        $retiro = Retiro::all();
        return view('retiros.retirosForm')->with('retiros', $retiro)
            ->with('afiliado', $afiliado)
            ->with('empleado', $empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Retiro $retiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Retiro $retiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Retiro $retiro)
    {
        //
    }
}
