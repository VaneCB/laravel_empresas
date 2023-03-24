<div class="bg-header h-20vh relative flex flex-col md:flex-row md:justify-between md:items-center md:flex-wrap md:text-center p-5 overflow-x-hidden">
    <img class="h-10v pt-4 p-2 object-contain w-auto" src="{{asset("img/logopng.png")}}" alt="logo">
    <h1 class="text-2xl md:text-4xl text-white my-4 md:my-0">Gestión de empresas</h1>
    <div class="flex flex-row flex-wrap md:flex-nowrap">
        @auth
            <div class="text-white">{{auth()->user()->name}}</div>
            <form action="logout" method="post">
                @csrf
                <x-primary-button>Logout</x-primary-button>
            </form>
        @endauth
        @guest
            <form class="text-black flex flex-col md:flex-row md:items-center md:ml-4 flex justify-center" method="post" action="login">
                @csrf
                <input class="my-2 md:my-0 md:mx-2 p-2 border border-gray-400 rounded-md" type="email" name="email" placeholder="email" value="{{old('email')}}">
                <input class="my-2 md:my-0 md:mx-2 p-2 border border-gray-400 rounded-md" type="password" name="password" placeholder="password">
                <x-primary-button class="mx-2 my-2 md:my-0">Login</x-primary-button>
                <x-a href="{{route('register')}}" class="mx-2">Registrarse</x-a>
            </form>
        @endguest
    </div>
</div>
