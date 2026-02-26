<header class="h-header bg-header flex flex-row justify-between items-center p-3">
    <a href="{{route("main")}}">
    <img src="{{asset("/images/logo2.png")}}" alt="logo" class="w-3xs">
    </a>
    <h1 class="text-4xl">{{__("Gestión de instituto")}}</h1>
    <div class="space-x-5">
        <form action="{{route("lang")}}" method="POST">
            @csrf
        <select name="lang" id="lang" class="w-70 h-15 text-2xl"
        onchange="this.form.submit()">

            <option selected disabled >{{__("Selecciona idioma")  }}</option>
            @foreach(config("languages") as $lang=>$detail)
                <option value="{{$lang}}" class="text-black"> {{     $detail['name'] }} {{ $detail['flag'] }}</option>
            @endforeach
        </select>
        </form>
            @guest
        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("login")}}">{{__("Login")  }}</a></button>
        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("register")}}">{{__("Register")  }}</a></button>
            @endguest
            @auth
            <div class="flex gap-10 justify-items-center align-middle items-center">
            <p class=" text-3xl text-center">{{auth()->user()->name}}</p>
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary" type="submit">Logout</button>
            </form>
            </div>
            @endauth
    </div>

</header>
