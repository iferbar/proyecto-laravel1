@props([
    'resource'=>'',
    'fields'=>[],
    'rows'=>[],
    'page'=>$_GET['page']??1,
    'table'=>""
])
<div class="flex justify-center">
<a href="{{route("crud.create", $resource)}}" class="btn bg-boton-primary hover:bg-boton-secondary border-none m-5 ">{{__("Añadir")}} {{$table}}</a>
</div>

    <div class="flex justify-center">
        <div class="overflow-x-auto w-9/12">
            <table class="table table-sm table-pin-rows table-pin-cols rounded-box  bg-white shadow-md">
                <thead>
                <tr class="lg:text-2xl text-center gap-5">
                    @foreach($fields as $field)
                        <th class=" text-white bg-nav">{{$field}}</th>
                    @endforeach
                    <th class=" text-white bg-nav" colspan="2">{{__("Opciones")}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $row)
                    <tr class="lg:text-sm ">
                        @foreach($fields as $atribute => $value)
                            <td class="border-b-gray-400 text-md ">
                                <div class="{{ in_array($atribute,['password']) ? 'max-w-3xs truncate' : '' }}">
                                    {{$row->$atribute}}
                                </div>
                            </td>
                        @endforeach

                            <td class="border-b-gray-400">
                                <a href ="{{route("crud.edit",[$resource, $row->id])}}?page={{$page}}" class="btn btn-info text-white">Editar</a>
                            </td>
                            <td class="border-b-gray-400">
                                <form action="{route("crud.destroy",[$resource, $row->id])}}?page={{$page}}" method="POST">
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
                {{$rows->links()}}
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

