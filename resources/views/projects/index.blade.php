<x-layouts.layout>
    <a href="{{route("projects.create")}}" class="btn btn-primary">Añadir Proyecto</a>

    <div class="flex justify-center ">
        <div class="overflow-x-auto h-96 ">
            <table class="table table-xs table-pin-rows table-pin-cols">
                <thead>
                <tr  class="lg:text-2xl">
                    <th>Nombre</th>
                    <th class="hidden lg:flex">Descripción</th>
                    <th>Horas</th>
                    <th class="hidden lg:flex">Fecha de comienzo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr class="lg:text-sm">
                        <td>{{$project->name}}</td>
                        <td class="hidden lg:flex">>{{$project->description}}</td>
                        <td>{{$project->hours}}</td>
                        <td class="hidden lg:flex">{{$project->start_date}}</td>
                        <td>
                            {{--                        <form action="{{route("projects.destroy",$project->id)}}" method="POST">--}}
                            <form action="/projects/{{$project->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="btn btn-warning" onclick="return confirm('Seguro que quiers borrar')"
                                >
                            </form>
                        </td>
                        <td>
                            <a href ="{{route("projects.edit", $project->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.layout>
