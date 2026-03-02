<x-layouts.layout>
    <div class="flex flex-row h-main justify-center items-center bg-main">
        <div class="card image-block hover:image-full w-96 shadow-sm">
            <figure>
                <img
                    src="https://cpilosenlaces.com/wp-content/uploads/2023/05/cpienlaces-home-2.jpg"
                    alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{__("ALUMNOS")}}</h2>
                <p>{{("Conoce la historia de varios alumnos y sus experiencias en el centro")}}</p>
                <div class="card-actions justify-end">
                    <button class="btn bg-boton-primary border-transparent">{{__("VER ALUMNOS")}}</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
