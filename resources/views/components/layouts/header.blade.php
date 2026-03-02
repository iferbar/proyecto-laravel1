{{--DISEÑO PANTALLA ORDENDADOR--}}
<header class="hidden lg:flex h-header bg-header flex-row justify-between items-center p-3">
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

{{--DISEÑO PANTALLA MOVIL--}}
<header class=" lg:hidden flex flex-row bg-header justify-between items-center py-5 px-15">
    <a href="{{route("main")}}">
        <img src="{{asset("/images/logo3.png")}}" alt="logo" class="object-cover w-20">
    </a>
        <div class="flex flex-col gap-4">
        @guest
            <div class="relative">
                <input type="checkbox" class="peer sr-only" id="menu_login">
                <label for="menu_login"  >
                    <img src="{{"/images/hamburger-menu-icon.png"}}" alt="logo1" class="object-cover w-10 bg-boton-primary p-2 rounded-sm">
                </label>
                    <div class="hidden peer-checked:flex">
                        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("login")}}">{{__("Login")  }}</a></button>
                        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("register")}}">{{__("Register")  }}</a></button>
                    </div>
            </div>
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

            <label for="menu_lang">
                <img src="{{"/images/language-icon.png"}}" alt="logo1" class=" object-cover w-10 bg-boton-primary p-2 rounded-sm">
            </label>
            <input type="checkbox" class="peer sr-only" id="menu_lang">
            <div class="hidden peer-checked:flex">
                <form action="{{route("lang")}}" method="POST">
                    @csrf
                    @foreach(config("languages") as $lang=>$detail)
                        <button type="submit" value="{{$lang}}" name="lang">{{ $detail['flag']}}</button>
                @endforeach
                </form>
            </div>
        </div>
</header>
