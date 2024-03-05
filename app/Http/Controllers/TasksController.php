<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends AuthorizeController
{
    public function store(Request $request, Project $project)
    {
        $this->authorizeOrFail($project);
        $request->validate(['task' => ['required', 'min:3', 'string']]);
        $project->tasks()->create(['body' => $request->get('task')]);
        return back()->with('success', 'done insert task');
    }

    public function destroy(Project $project, Task $task)
    {
        $this->authorizeOrFail($project);
        $task->deleteOrFail();
        return back()->with('success', 'done delete task');
    }

    public function update(Project $project, Task $task)
    {
        $this->authorizeOrFail($project);
        $task->update(['status' => !$task->status]);
        return back()->with('success', 'done update task');
    }
}
