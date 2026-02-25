<header class="h-header bg-header flex flex-row justify-between items-center p-3">
    <a href="{{route("main")}}">
    <img src="{{asset("/images/logo.png")}}" alt="logo" class="w-3xs">
    </a>
    <h1 class="text-4xl">{{__("Gestión de instituto")}}</h1>
    <select name="lang" id="" class="w-40 h-15 text-2xl">
        @foreach(config("languages") as $lang=>$detail)
            <option value="{{$lang}}" class="text-black"> {{ $detail['name'] }} {{ $detail['flag'] }}</option>
        @endforeach
    </select>
    <div class="space-x-5">
        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-nav"><a href="{{route("login")}}">{{__("Acceder")}}</a></button>
        <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-nav"><a href="{{route("register")}}">{{__("Registrarse")}}</a></button>
    </div>

</header>
