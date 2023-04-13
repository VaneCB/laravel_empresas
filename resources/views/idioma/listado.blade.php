@extends('layout')
@section ('main')
    <mitabla filas_serializadas='@json($filas)' campos_serializados='@json($campos)' tabla='{{$tabla}}'>
@endsection
