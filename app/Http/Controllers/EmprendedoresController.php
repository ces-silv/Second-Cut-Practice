<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Emprendedores;

class EmprendedoresController extends Controller
{
    public function index(){
        $emprendedores = Emprendedores::all();
        return view('emprendedores.index', compact('emprendedores'));
    }

    public function create(){
        return view('emprendedores.create');
    }

    public function store(Request $request){
        Emprendedores::create($request->all());
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor creado exitosamente.');
    }

    public function show(Emprendedores $emprendedore){
        return view('emprendedores.show', compact('emprendedore'));
    }

    public function edit(Emprendedores $emprendedore){
        return view('emprendedores.edit', compact('emprendedore'));
    }

    public function update(Request $request, Emprendedores $emprendedore){
        $emprendedore->update($request->all());
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor actualizado correctamente.');
    }

    public function destroy(Emprendedores $emprendedore){
        $emprendedore->delete();
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor eliminado.');
    }
}
