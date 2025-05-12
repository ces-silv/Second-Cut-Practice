<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feria;

class FeriaController extends Controller
{
    public function index(){
        $ferias = Feria::all();
        return view('ferias.index', compact('ferias'));
    }

    public function create(){
        return view('ferias.create');
    } 

    public function store(Request $request){
        Feria::create($request->all());
        return redirect()->route('ferias.index')->with('success', 'Feria creada exitosamente.');

    }

    public function show (Feria $feria){
        return view('ferias.show', compact('feria'));
    }

    public function edit (Feria $feria){
        return view('ferias.edit', compact('feria'));
    }

    public function update(Request $request, Feria $feria){
        $feria->update($request->all());
        return redirect()->route('ferias.index')->with('success', 'Feria actualizada exitosamente.');
    }

    public function destroy(Feria $feria){
        $feria->delete();
        return redirect()->route('ferias.index')->with('success', 'Feria eliminada.');
    }

}
