@extends('layout')
@section ('main')
    <div class="mx-2 mt-2">
        <x-a href="{{route('productos.create')}}">Crear Producto</x-a>
    </div>

    <table class="bg-[#dfe7f8d9] table auto border-collapse border-spacing-2 border border-slate-400 mx-auto">
        <caption class="text-2xl">Listado de productos</caption>
        <tr>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Código</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Nombre</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Nombre Corto</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">PVP</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Familia</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white"></th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white"></th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td class="border border-slate-300 p-2 bg-[#eff6ff]">{{$producto->cod}}</td>
                <td class="border border-slate-300 p-2 bg-[#eff6ff]">{{$producto->nombre}}</td>
                <td class="border border-slate-300 p-2">{{$producto->nombre_corto}}</td>
                <td class="border border-slate-300 p-2">{{$producto->PVP}}</td>
                <td class="border border-slate-300 p-2">{{$producto->familia}}</td>
                <td>
                    <form action="{{route('productos.destroy',$producto->cod)}}" method="post">
                        @method('DELETE')
                        @csrf

                        <x-primary-button>Borrar</x-primary-button>
                    </form>
                </td>
                <td><x-a href="{{route('productos.edit', $producto->cod)}}">Editar</x-a></td>
            </tr>
        @endforeach
    </table>
    {{$productos->links()}}
@endsection

