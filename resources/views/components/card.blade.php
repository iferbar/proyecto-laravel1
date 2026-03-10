@props([
    'img'=>"https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp",
    'title'=>"",
    "description"=>"",
    "ref"=>"",
    'label'=>'Click me'
])
<div class="card bg-nav shadow-sm">
    <figure>
        <img
            src="{{$img}}"
            alt="{{$title}}" class="lg:h-70 h-55" />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{$title}}</h2>
        <p class="text-left">{{$description}}</p>
        <div class="card-actions justify-end">
            <a href="{{$ref}}" class="btn bg-boton-primary border-none">{{$label}}</a>
        </div>
    </div>
</div>
