<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprendedores;

use App\Models\Feria;

class FeriaController extends Controller
{
    public function index(){
        $ferias = Feria::all();
        return view('ferias.index', compact('ferias'));
    }

    public function create(){
        $emprendedores = Emprendedores::all();
        return view('ferias.create', compact('emprendedores'));
    } 

    public function store(Request $request){
        $feria = Feria::create($request->all());
        $feria->emprendedores()->sync($request->input('emprendedores', []));
        return redirect()->route('ferias.index')->with('success', 'Feria creada exitosamente.');
    }
    

    public function show (Feria $feria){
        return view('ferias.show', compact('feria'));
    }

    public function edit (Feria $feria){
        $emprendedores = Emprendedores::all();
        return view('ferias.edit', compact('feria', 'emprendedores'));
    }
    

    public function update(Request $request, Feria $feria){
        $feria->update($request->all());
        $feria->emprendedores()->sync($request->input('emprendedores', []));
        return redirect()->route('ferias.index')->with('success', 'Feria actualizada exitosamente.');
    }

    public function destroy(Feria $feria){
        $feria->delete();
        return redirect()->route('ferias.index')->with('success', 'Feria eliminada.');
    }

}
