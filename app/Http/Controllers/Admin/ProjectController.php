<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;
use App\Models\Type;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types= Type::all();
        return view('admin.projects.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $request->validate([
            'title' => 'required|max:70',
            'content' => 'required|max:100',
            'type_id'=> 'nullable|exists:types,id'
        ]);

        $project = new Project;
        $project->title=$request->input('title');
        $project->content=$request->input('content');
        $project->slug=$request->input('slug');
        $project->type_id=$request->input('type_id');
        $project->save();
        return redirect()->route('admin.projects.show', ['project'=>$project->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:70',
            'content' => 'required|max:100'
        ]);
        $project->title= $request->input('title');
        $project->slug= $request->input('slug');
        $project->content= $request->input('content');
        $project->save();
        return redirect()->route('project.show', ['project'=>$project->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
