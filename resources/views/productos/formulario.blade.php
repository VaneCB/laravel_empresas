@extends('layout')
@section('main')

    <form class= "bg-[#eff6ff] overflow-y-auto w-4/6 place-items-center content-center p-3 mx-auto" action="{{route('productos.store')}}" method="post">
        @csrf

        <label class="block">Codigo</label>
        <input class="inline-block" type="text" name="cod" id="" value="{{old('cod')}}">
        <label class="block ">Nombre</label>
        <input class="inline-block" type="text" name="nombre" id="" value="{{old('nombre')}}">
        <label class="block">Nombre corto</label>
        <input class="inline-block" type="text" name="nombre_corto" id="" value="{{old('nombre_corto')}}">
        <label class="block">Descripcion</label>
        <textarea class="inline-block" name="descripcion" value="{{old('descripcion')}}"></textarea>
        <label class="block">Precio</label>
        <input class="inline-block" type="text" name="PVP" id="" value="{{old('PVP')}}">
        <label class="block">Familia</label>
        <input class="inline-block" type="text" name="familia" id="" value="{{old('familia')}}">
        <div class="overflow-y-auto">
        <button class="block p-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Guardar</button>
        </div>
    </form>
@endsection
