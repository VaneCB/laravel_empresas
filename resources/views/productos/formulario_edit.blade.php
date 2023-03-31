@extends('layout')
@section('main')
    <form class= "bg-[#eff6ff] prose md:prose-lg lg:prose-xl rounded-b-lg  outline outline-offset-2 outline-cyan-500  mt-4 mb-4 overflow-y-auto w-4/6 p-3 mx-auto flex flex-col items-center justify-center" action="{{route('productos.update',$producto->cod)}}" method="post">
        @csrf
        @method('PUT')
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Codigo</label>
        <input class="inline-block rounded-md " type="text" name="cod" id="" value="{{$producto->cod}}">
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Nombre</label>
        <input class="inline-block rounded-md " type="text" name="nombre" id="" value="{{$producto->nombre}}">
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Nombre corto</label>
        <input class="inline-block rounded-md " type="text" name="nombre_corto" id="" value="{{$producto->nombre_corto}}">
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Descripcion</label>
        <textarea class="inline-block resize rounded-md" name="descripcion" value="{{$producto->descripcion}}"></textarea>
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Precio</label>
        <input class="inline-block rounded-md " type="text" name="PVP" id="" value="{{$producto->PVP}}">
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Familia</label>
        <input class="inline-block pb-1 rounded-md " type="text" name="familia" id="" value="{{$producto->familia}}">
        <div class="overflow-y-auto mt-2">
            <button class="block cursor-pointer rounded-full pt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Guardar</button>
        </div>
    </form>
@endsection
