<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use App\Models\Equipo;

use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mantenimientos = Mantenimiento::with('equipo')->get();
        return view('mantenimientos.index', compact('mantenimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('mantenimientos.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mantenimiento::create($request->all());
        return redirect()->route('mantenimientos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimientos.show', compact('mantenimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mantenimiento = Mantenimiento::find($id);
        $equipos = Equipo::all();
        return view('mantenimientos.edit', compact('mantenimiento', 'equipos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mantenimiento = Mantenimiento::find($id);
        $mantenimiento->update($request->all());
        return redirect()->route('mantenimientos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mantenimiento::find($id)->delete();
        return redirect()->route('mantenimientos.index');
    }
}
