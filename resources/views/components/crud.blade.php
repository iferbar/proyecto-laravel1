@props([
    'resource'=>'',
    'campos'=>[],
    'filas'=>[]
])
<div class="flex justify-center">
<a href="{{route("$resource.create")}}" class="btn bg-boton-primary border-none m-5 ">{{__("AÑADIR")}} {{strtoupper($resource)}}</a>
</div>

    <div class="flex justify-center ">
        <div class="overflow-x-auto ">
            <table class="table table-xs table-pin-rows table-pin-cols rounded-box border border-black">
                <thead>
                <tr  class="lg:text-2xl text-center gap-5">
                    @foreach($campos as $campo)
                        <th class="rounded-box">{{$campo}}</th>
                    @endforeach
                    <th class="rounded-box" colspan="2">{{__("Opciones")}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($filas as $fila)
                    <tr class="lg:text-sm ">
                        @foreach($campos as $atributo => $valor)
                            <td class="border-black p-5">{{$fila->$atributo}}</td>
                        @endforeach

                            <td class="border-black">
                                <a href ="{{route("$resource.edit",$fila->id)}}" class="btn btn-info text-white">Editar</a>
                            </td>
                            <td class="border-black">
            <form action="{{route("$resource.destroy",$fila->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Borrar" class="btn btn-error text-white" onclick="return confirm('Seguro que quiers borrar')"
                >
            </form>
            </td>
                    </tr>
                @endforeach
    </tbody>
    </table>
            <div class="my-10">
                {{$filas->links("pagination::simple-tailwind")}}
            </div>
    </div>
    </div>
