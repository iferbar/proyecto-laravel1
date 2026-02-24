<header class="h-header bg-header flex flex-row justify-between items-center p-3">
    <a href="{{route("main")}}">
    <img src="{{asset("/images/logo.png")}}" alt="logo" class="w-3xs">
    </a>
    <h1 class="text-4xl">Gestión de instituto</h1>
    <div>
        <button class="btn btn-lg bg-boton-primary"><a href="{{route("login")}}">Login</a></button>
        <button class="btn btn-lg bg-boton-primary"><a href="{{route("register")}}">Register</a></button>
    </div>
</header>
