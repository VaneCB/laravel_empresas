<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;

class EmpresaController extends Controller
{

    public function get_paginate(){
        $empresas=Empresa::paginate(10);
        return response($empresas);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas=Empresa::paginate(10);
        $campos =array_keys($empresas[0]->getAttributes());
        unset($campos[array_search('created_at',$campos)]);
        unset($campos[array_search('updated_at',$campos)]);
    $campos;

        return view("empresa.listado", ['filas'=>$empresas, 'campos'=>$campos,'tabla'=>'Empresas']);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("empresa.formulario");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpresaRequest $request)
    {
        $empresa = new Empresa($request->input());
        $empresa->saveOrFail();
        return redirect(route("empresas.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        return view("empresa.formulario_edit", ['empresa'=>$empresa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {

        $info = $request->input();
        $empresa->update($info);
        return redirect(route("empresas.index"));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        $empresas =Empresa::paginate(10);
        return response($empresas);
    }
}

