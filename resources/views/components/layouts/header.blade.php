{{--DISEÑO PANTALLA ORDENDADOR--}}
<header class="hidden lg:flex h-header bg-header flex-row justify-between items-center p-3">
    <a href="{{route("main")}}">
    <img src="{{asset("/images/logo2.png")}}" alt="logo" class="w-3xs">
    </a>
    <h1 class="text-4xl">{{__("Gestión de instituto")}}</h1>
    <div class="space-x-5">

            @guest
        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("login")}}">{{__("Login")  }}</a></button>
        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("register")}}">{{__("Register")  }}</a></button>
            @endguest

            @auth
            <div class="flex gap-10 justify-around align-middle items-center m-0">
            <p class="text-3xl text-center">{{auth()->user()->name}}</p>
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary" type="submit">{{__("Logout")}}</button>
            </form>
            </div>
            @endauth

                <form action="{{route("lang")}}" method="POST">
                    @csrf
                    <select name="lang" id="lang" class="w-70 my-3 text-2xl border-white border-botton border-b-2 cursor-pointer"
                            onchange="this.form.submit()">

                        <option selected disabled>{{__("Selecciona idioma")  }}</option>
                        @foreach(config("languages") as $lang=>$detail)
                            <option value="{{$lang}}" class="text-black"> {{     $detail['name'] }} {{ $detail['flag'] }}</option>
                        @endforeach
                    </select>
                </form>
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
                <label for="menu_login"  class="flex justify-end">
                    <img src="{{"/images/hamburger-menu-icon.png"}}" alt="logo1" class="object-cover w-10 bg-boton-primary p-2 rounded-sm">
                </label>
                    <div class="hidden peer-checked:flex peer-checked:flex-row py-3 gap-3">
                        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("login")}}">{{__("Login")  }}</a></button>
                        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary"><a href="{{route("register")}}">{{__("Register")  }}</a></button>
                    </div>
            </div>
        @endguest

        @auth
                <div class="relative">
                    <input type="checkbox" class="peer sr-only" id="menu_logout">
                    <label for="menu_logout">
                        <div class="flex justify-around gap-10 border-white border-botton border-b-2 px-1 cursor-pointer">
                            <p class="text-2xl text-center">{{auth()->user()->name}}</p>
                            <img src="images/arrow-chevron-down.svg" alt="arrow">
                        </div>
                    </label>
                    <div class="hidden peer-checked:flex">
                    <form action="{{route("logout")}}" method="POST">
                        @csrf
                        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary m-3" type="submit">{{__("Logout")}}</button>
                    </form>
                    </div>
                </div>
        @endauth

            <label for="menu_lang" class="flex justify-end">
                <img src="{{"/images/language-icon.png"}}" alt="logo1" class=" object-cover w-10 bg-boton-primary p-2 rounded-sm cursor-pointer">
            </label>
            <input type="checkbox" class="peer sr-only" id="menu_lang">
            <div class="hidden peer-checked:flex justify-center">
                <form action="{{route("lang")}}" method="POST" >
                    @csrf
                    @foreach(config("languages") as $lang=>$detail)
                        <button type="submit" value="{{$lang}}" name="lang" class=" rounded bg-gray-200 p-1 px-2 cursor-pointer">{{ $detail['flag']}}</button>
                @endforeach
                </form>
            </div>
        </div>
</header>
