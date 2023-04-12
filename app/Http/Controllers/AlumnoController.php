<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{

    public function get_paginate(){
        $empresas=Alumno::paginate(10);
        return response($empresas);
    }
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $alumnos=Alumno::paginate(10);
        $campos =array_keys($alumnos[0]->getAttributes());
        unset($campos[array_search('created_at',$campos)]);
        unset($campos[array_search('updated_at',$campos)]);
        return view("empresa.listado", ['filas'=>$alumnos, 'campos'=>$campos,'tabla'=>'Alumnos']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
