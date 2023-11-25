<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['proveedor'] = Proveedor::paginate(5);
        return view('proveedor.index', $datos);
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosProveedor = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosUsuario['Foto']=$request->file('Foto')->store('uploads','public');
        }
        proveedor::insert($datosProveedor); 
        return redirect('proveedor')->with('mensaje','Proveedor Agregado Con Exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $proveedor=proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosProveedor = request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $proveedor=proveedor::findOrFail($id);
            Storage::delete('public/'.$proveedor->Foto);
            $datosProveedor['Foto']=$request->file('Foto')->store('uploads','public');
        }
        proveedor::where('id','=',$id)->update($datosProveedor);
        $proveedor=proveedor::findOrFail($id);
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $proveedor=proveedor::findOrfail($id);
        if(Storage::delete('public/'.$proveedor->Foto)){
            proveedor::destroy($id);
        }
        return redirect('proveedor')->with('mensaje','Proveedor Borrado Con Exito');
    }
}
