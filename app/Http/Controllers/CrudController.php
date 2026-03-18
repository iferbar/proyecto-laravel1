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
        $rol = config("resources.$resource.role");

        if ($rol){
            $resource_name = $rol?  config("resources.$resource.resource"):$resource;

            $model = "App\\Models\\".Str::studly(Str::singular($resource_name));

            $rows = $model::role($rol)->paginate(5);

        }else{
            $model = "App\\Models\\".Str::studly(Str::singular($resource));
            $rows =$model::paginate(5);
        }

        $fields = $model::getFields();

        $table = __("$resource.table");
        return view('crud.index', compact('resource', 'rows', 'fields', 'table'));

        //TODO Tener en cuanta los roles.

        return"<h1> Voy a gestionar $resource</h1>";
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
