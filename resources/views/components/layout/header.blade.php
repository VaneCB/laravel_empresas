<div class="bg-header h-15v relative flex w-full flex flex-row justify-between p-5">
<img class="h-10v pt-4 p-2" src="{{asset("img/logopng.png")}}" alt="logo">

<h1 class="max-h-full text-6xl text-white">Gestión de empresas</h1>
<div class="flex flex-row">
    @auth
        {{auth()->user()->name}}
        <form action="logout" method="post">
            @csrf
            <x-primary-button>Logout</x-primary-button>
        </form>
    @endauth
    @guest
    <form class="text-black" method="post" action="login">
        @csrf
        <input type="email" name="email" placeholder="email" value="{{old('email')}}">
        <input type="password" name="password" placeholder="password">

        <x-primary-button>Login</x-primary-button>
        <x-a href="{{route('register')}}">Registrarse</x-a>
    </form>
        @endguest
</div>
</div>
