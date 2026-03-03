<x-layouts.layout>
    <div class=" rounded-box border bg-main">
        <table class="table">
        <tr class="bg-boton-primary">
            <td class="text-white">Nombre</td>
            <td class="text-white">Descripcion</td>
            <td class="text-white">Horas</td>
            <td class="text-white">Fecha de comienzo</td>
        </tr>
        @foreach($projects as $project)
            <tr >
                <td class="border border-gray-400">{{$project->name}}</td>
                <td class="border border-gray-400">{{$project->description}}</td>
                <td class="border border-gray-400">{{$project->hours}}</td>
                <td class="border border-gray-400">{{$project->start_date}}</td>

            </tr>
        @endforeach
    </table>
    </div>
</x-layouts.layout>
