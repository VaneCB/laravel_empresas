
@extends('layout')
@section ('main')
    <table>
        <caption>Listado de empresas</caption>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
        </tr>
        @foreach($empresas as $empresa)
            <tr>
                <th>{{$empresa->id}}</th>
                <th>{{$empresa->name}}</th>
                <th>{{$empresa->address}}</th>
            </tr>
        @endforeach
    </table>
    {{$empresas->links()}}
@endsection
