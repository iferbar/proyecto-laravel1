<x-layouts.layout>
    @guest
    <div
        class="hero min-h-full bg-main"
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
        <div class="flex flex-row h-main justify-center items-center bg-main">
            <div class="card image-block hover:image-full w-96 shadow-sm">
                <figure>
                    <img
                        src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">TITULO</h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <button class="btn bg-boton-primary border-transparent">COMPRAR</button>
                    </div>
                </div>
            </div>
        </div>
        @endguest
</x-layouts.layout>
