<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $resource)
    {

        //Recuperar todos los datos de resources del config
        $config =config("resources.$resource");

        $resource_name =$config['resource']??$resource;
        //Resolvemos de forma dinámica el modelo
        $model = "App\\Models\\".Str::studly(Str::singular($resource_name));

        //obtener una paginacion de 5 registros del model, teniendo en cuenta que si es rol
        //TODO Tener en cuanta los roles.
        $query = $model::query();
        $rol = $config['role'] ??null;

        if ($rol)
            $query = $query->role($rol);


        $rows=$query->paginate(5);


        $fields = $model::getFields();


        $table = __("$resource.table");

        return view('crud.index', compact('resource', 'rows', 'fields', 'table'));

    }
    /**
     * Store a newly created resource in storage.
     */
    public function create(string $resource)
    {
        $table= __("$resource.table");
        return view("$resource.create", compact('resource', 'table'));
        //
    }

    public function store(string $resource,Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $resource,string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $resource,Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $resource,string $id)
    {
        $model="App\\Models\\".Str::studly(Str::singular($resource));
        $register=$model::find($id);
        $register->delete();
        //
        return redirect(route("crud.index", $resource));
    }
}
