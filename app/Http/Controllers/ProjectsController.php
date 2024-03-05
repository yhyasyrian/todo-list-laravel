<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerProjectRequest;
use App\Http\Requests\ProjectsRequest;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectsController extends AuthorizeController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = auth()->user()->projects()->orderBy('id','desc')->paginate(20);
        return view('dashboard',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectsRequest $request)
    {
        $request->createProject();
        return back()->with('success','done create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $this->authorizeOrFail($project);
        $tasks = Task::where('project_id','=',$project->id)->orderBy('id','desc')->get();
        /**
         * Or can use
         * $project = Project::where('id','=',$project->id)->with('tasks')->first();
         * $tasks = $project->tasks()->get();
         */
        return view('project.show',compact('project','tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $this->authorizeOrFail($project);
        return view('project.create',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectsRequest $request,Project $project)
    {
        $this->authorizeOrFail($project);
        if ($request->has('status'))
            $request->updateProjectStatus($project);
        else
            $request->updateProjectData($project);
        return back()->with('success','done update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OwnerProjectRequest $request,Project $project)
    {
        $this->authorizeOrFail($project);
        $request->setProject($project)
                ->delete();
        return redirect(route('dashboard'));
    }
}
