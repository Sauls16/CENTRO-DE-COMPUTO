<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ubicaciones = Ubicacion::all();
        return view('ubicaciones.index', compact('ubicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ubicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ubicacion::create($request->all());
        return redirect()->route('ubicaciones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ubicacion = Ubicacion::find($id);
        return view('ubicaciones.show', compact('ubicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ubicacion = Ubicacion::find($id);
        return view('ubicaciones.edit', compact('ubicacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubicacion = Ubicacion::find($id);
        $ubicacion->update($request->all());
        return redirect()->route('ubicaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ubicacion::find($id)->delete();
        return redirect()->route('ubicaciones.index');
    }
}
