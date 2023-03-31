
@extends('layout')
@section ('main')
    <div class="mx-2 mt-2">
        <x-a href="{{route('empresas.create')}}">Crear Empresa</x-a>
    </div>

    <table class="bg-[#dfe7f8d9] table auto border-collapse border-spacing-2 border border-slate-400 mx-auto">
        <caption class="text-2xl">Listado de empresas</caption>
        <tr>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">ID</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Nombre</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Dirección</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">DNI</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white"></th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white"></th>
        </tr>
        @foreach($empresas as $empresa)
            <tr>
                <td class="border border-slate-300 p-2 bg-[#eff6ff]">{{$empresa->id}}</td>
                <td class="border border-slate-300 p-2">{{$empresa->name}}</td>
                <td class="border border-slate-300 p-2">{{$empresa->address}}</td>
                <td class="border border-slate-300 p-2">{{$empresa->DNI}}</td>
                <td>
                    <form action="{{route('empresas.destroy',$empresa->id)}}" method="post">
                        @method('DELETE')
                        @csrf

                        <x-primary-button>Borrar</x-primary-button>
                    </form>
                </td>
                <td><x-a href="{{route('empresas.edit', $empresa->id)}}">Editar</x-a></td>
            </tr>
        @endforeach
    </table>
    {{$empresas->links()}}
@endsection
