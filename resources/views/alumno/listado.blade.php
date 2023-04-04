
@extends('layout')
@section ('main')
    <div class="mx-2 mt-2">
        <x-a href="{{route('alumnos.create')}}">Crear Alumno</x-a>
    </div>

    <table class="bg-[#dfe7f8d9] table auto border-collapse border-spacing-2 border border-slate-400 mx-auto">
        <caption class="text-2xl">Listado de alumnos</caption>
        <tr>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">ID</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Nombre</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Telefono</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Email</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white">Empresa ID</th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white"></th>
            <th class="border border-slate-300 bg-[#0c4a6e] text-white"></th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
                <td class="border border-slate-300 p-2 bg-[#eff6ff]">{{$alumno->id}}</td>
                <td class="border border-slate-300 p-2">{{$alumno->name}}</td>
                <td class="border border-slate-300 p-2">{{$alumno->phone}}</td>
                <td class="border border-slate-300 p-2">{{$alumno->email}}</td>
                <td class="border border-slate-300 p-2">{{$alumno->empresa_id}}</td>
                <td>
                    <form action="" method="post">
                        @method('DELETE')
                        @csrf

                        <x-primary-button>Borrar</x-primary-button>
                    </form>
                </td>
                <td><x-a href="">Editar</x-a></td>
            </tr>
        @endforeach
    </table>
    {{$alumnos->links()}}
@endsection
