@extends('layout')
@section('main')

    <form class= "bg-[#eff6ff] prose md:prose-lg lg:prose-xl rounded-b-lg  outline outline-offset-2 outline-cyan-500  mt-4 mb-4 overflow-y-auto w-4/6 p-3 mx-auto flex flex-col items-center justify-center" action="{{route('empresas.update',$empresa->id)}}" method="post">
        @csrf
        @method('PUT')
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Nombre</label>
        <input class="inline-block rounded-md " type="text" name="name" id="" value="{{$empresa->name}}">
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">Dirección</label>
        <input class="inline-block rounded-md " type="text" name="address" id="" value="{{$empresa->address}}">
        <label class="block underline decoration-sky-800 underline decoration-double pb-1">DNI</label>
        <input class="inline-block rounded-md " type="text" name="DNI" id="" value="{{$empresa->DNI}}">
        <div class="overflow-y-auto">
            <button class="block cursor-pointer rounded-full pt-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Guardar</button>
        </div>
    </form>
@endsection
