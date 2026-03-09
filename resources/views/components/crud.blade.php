@props([
    'resource'=>'',
    'campos'=>[],
    'filas'=>[]
])
{{--@dd($campos,$filas,$resource)--}}
<a href="{{route("$resource.index")}}" class="btn bg-boton-primary border-none m-5">AÑADIR {{strtoupper($resource)}}</a>
    <div class="flex justify-center ">
        <div class="overflow-x-auto h-90">
            <table class="table table-xs table-pin-rows table-pin-cols">
                <thead>
                <tr  class="lg:text-2xl text-center">
                    @foreach($campos as $campo)
                        <th>{{$campo}}</th>
                    @endforeach
                    <th colspan="2">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($filas as $fila)
                    <tr class="lg:text-sm">
                        @foreach($campos as $atributo => $valor)
                            <td>{{$fila->$atributo}}</td>
                        @endforeach

                            <td>
                                <a href ="{{route("$resource.edit",$fila->id)}}" class="btn btn-info text-white">Editar</a>
                            </td>
                            <td>
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
    </div>
    </div>
