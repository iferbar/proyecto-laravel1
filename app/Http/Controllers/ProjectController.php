<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Teacher;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $page=1)
    {
        $projects = Project::paginate(5);
        $campos = Project::getLabels();
        return view('projects.index', compact('projects','campos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $datos=$request->input();

        Project::create($datos);
        return redirect()->route('projects.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.edit',compact('project'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $page=request()->get('page');
        return view('projects.edit', compact('project'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $page=request()->get('page');
        $datos = $request->input();
        $project->update($datos);
        return redirect()->route('projects.index',['page'=>$page]);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $page = request('page', 1);
        $lastPage = Project::paginate(10)->lastPage();
        $page = min($page, $lastPage);

        $project->delete();
        return redirect()->route('projects.index',['page'=>$page]);
        //
    }
}
