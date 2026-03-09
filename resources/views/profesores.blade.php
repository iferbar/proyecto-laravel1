<x-layouts.layout>
{{--    <div class="flex flex-row h-main justify-center items-center bg-main">--}}
{{--        <div class="card image-block  w-96 shadow-sm">--}}
{{--            <figure>--}}
{{--                <img--}}
{{--                    src="https://cpilosenlaces.com/wp-content/uploads/2023/05/cpienlaces-home-2.jpg"--}}
{{--                    alt="Shoes" />--}}
{{--            </figure>--}}
{{--            <div class="card-body">--}}
{{--                <h2 class="card-title">{{__("PROFESORES")}}</h2>--}}
{{--                <p>{{("Conoce la historia de varios profesores y sus experiencias en el centro")}}</p>--}}
{{--                <div class="card-actions justify-end">--}}
{{--                    <a href="{{route("teachers.index")}}"><button class="btn bg-boton-primary border-transparent">{{__("VER PROFESORES")}}</button></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <x-card :label="__('Ver Profesores')"
            :img="asset('/images/teachers.jpeg')"
            title="Gestión de Profesores"
            description="Vamos a ver un Crud de los Profesores"
            ref="{{route('teachers.index')}}" />

</x-layouts.layout>
