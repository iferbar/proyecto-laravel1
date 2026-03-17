<x-layouts.layout>
    @guest
    <div
        class="h-main hero min-h-full bg-main"
        style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);
        backdrop-filter: blur(100%);"
    >
        <div class="hero-overlay bg-green-900/50 backdrop-blur-sm"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">{{__("Pensando en tu futuro")  }}</h1>
                <p class="mb-5">
                    {{__("Te ofrecemos ciclos formativos adaptados a las necesidades actuales de las empresas")}}
                </p>
                <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary">{{__("El Centro")}}</button>
                <button class="btn btn-lg shadow-none bg-boton-primary border-transparent hover:bg-boton-secondary">{{__("Oferta Formativa")}}</button>
            </div>
        </div>
    </div>
    @endguest
    @auth
            <div
                class="h-main hero min-h-full bg-main"
                style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);
        backdrop-filter: blur(100%);"
            >
                <div class="hero-overlay bg-green-900/50 backdrop-blur-sm"></div>
                <div class="flex text-neutral-content text-center px-5">
                    <div class="flex flex-row h-main justify-center items-center gap-5">

                        @foreach(config("resources") as $resource)
                            <x-card
{{--                                    :label='__("Ver $resource")'--}}
                                    :label="__('Ver :resource', ['resource' => $resource])"
                                    :img='asset("/images/$resource.jpg")'
                                    :title="__('Gestión de :resource', ['resource' => $resource])"
                                    :description="__('Vamos a ver un Crud de los :resource', ['resource' => $resource])"
                                    :ref="route('crud.index', $resource)" />
                        @endforeach




{{--                        <x-card :label="__('Ver Alumnos')"--}}
{{--                                :img="asset('/images/students.jpg')"--}}
{{--                                :title="__('Gestión de alumnos')"--}}
{{--                                :description="__('Vamos a ver un Crud de los Alumnos')"--}}
{{--                                ref="{{route('students.index')}}" />--}}
{{--                        <x-card :label="__('Ver Profesores')"--}}
{{--                                :img="asset('/images/teachers.jpg')"--}}
{{--                                :title="__('Gestión de profesores')"--}}
{{--                                :description="__('Vamos a ver un Crud de los Profesores')"--}}
{{--                                ref="{{route('teachers.index')}}" />--}}
{{--                        <x-card :label="__('Ver Proyectos')"--}}
{{--                                :img="asset('/images/projects.jpg')"--}}
{{--                                :title="__('Gestión de proyectos')"--}}
{{--                                :description="__('Vamos a ver un Crud de los Proyectos')"--}}
{{--                                ref="{{route('projects.index')}}" />--}}
{{--                        <x-card :label="__('Ver Registrados')"--}}
{{--                                :img="asset('/images/guests.jpg')"--}}
{{--                                :title="__('Gestión de registrados')"--}}
{{--                                :description="__('Vamos a ver un Crud de los Registrados')"--}}
{{--                                ref="{{route('projects.index')}}" />--}}
{{--                        <x-card :label="__('Ver Usuarios')"--}}
{{--                                :img="asset('/images/users.jpg')"--}}
{{--                                :title="__('Gestión de users')"--}}
{{--                                :description="__('Vamos a ver un Crud de los Usuarios')"--}}
{{--                                ref="{{route('projects.index')}}" />--}}
                    </div>
                </div>
            </div>
    @endauth
</x-layouts.layout>
