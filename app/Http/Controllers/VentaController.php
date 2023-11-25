<?php

namespace App\Http\Controllers;

use App\Models\venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['ventas']=Venta::paginate(5);
        return view('venta.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosVenta = request()->except('_token');
        Venta::insert($datosVenta);
        return response()->json($datosVenta);
    }

    /**
     * Display the specified resource.
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $venta=Venta::findOrFail($id);
        return view('venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosVenta = request()->except(['_token','_method']);
        Venta::where('id','=',$id)->update($datosVenta);
        $venta=Venta::findOrFail($id);
        return view('venta.edit', compact('venta'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Venta::destroy($id);
        return redirect('venta');
    }


    public function pago($id)
    {
        // Obtener la venta por ID
        $venta = Venta::findOrFail($id);

        // Lógica para el pago (puedes integrar pasarelas de pago aquí)

        // Puedes pasar datos adicionales a la vista si es necesario
        return view('venta.confirmacion_pago', compact('venta'));
    }

    public function imprimir($id)
    {
        // Obtener la venta por ID
        $venta = Venta::findOrFail($id);

        // Lógica para la impresión (puedes ajustar según tus necesidades)

        // Puedes pasar datos adicionales a la vista si es necesario
        return view('venta.imprimir', compact('venta'));
    }

}
