@props([
    'resource'=>'',
    'campos'=>[],
    'filas'=>[],
    'page'=>$_GET['page']??1
])
<div class="flex justify-center">
<a href="{{route("$resource.create")}}" class="btn bg-boton-primary border-none m-5 ">{{__("AÑADIR")}} {{strtoupper($resource)}}</a>
</div>

    <div class="flex justify-center">
        <div class="overflow-x-auto w-9/12">
            <table class="table table-md table-pin-rows table-pin-cols rounded-box  bg-white shadow-md">
                <thead>
                <tr class="lg:text-2xl text-center gap-5">
                    @foreach($campos as $campo)
                        <th class=" text-white bg-nav">{{$campo}}</th>
                    @endforeach
                    <th class=" text-white bg-nav" colspan="2">{{__("Opciones")}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($filas as $fila)
                    <tr class="lg:text-sm">
                        @foreach($campos as $atributo => $valor)
                            <td class="border-b-gray-400  text-md">{{$fila->$atributo}}</td>
                        @endforeach

                            <td class="border-b-gray-400">
                                <a href ="{{route("$resource.edit",$fila->id)}}?page={{$page}}" class="btn btn-info text-white">Editar</a>
                            </td>
                            <td class="border-b-gray-400">
                                <form action="{{route("$resource.destroy",$fila->id)}}?page={{$page}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="button" value="Borrar" class="btn btn-error text-white" onclick="confirmarDelete(this)"
                >
            </form>
            </td>
                    </tr>
                @endforeach
    </tbody>
    </table>
            <div class="my-10">
                {{$filas->links()}}
            </div>
    </div>
    </div>
<script>
    function confirmarDelete(button){
        Swal.fire(
            {
                title: "{{ __('Seguro que quieres borrar') }}",
                icon: "question",
                showCancelButton:true,
                confirmButtonText: "{{__("Borrar definitivo")}}",
                theme: 'bulma',
                customClass: {
                    confirmButton: 'btn-confirm',
                    cancelButton: 'btn-cancel'
                }
            }
        ).then((result) => {
            if (result.isConfirmed)
                button.closest('form').submit()
        });
    }
</script>

