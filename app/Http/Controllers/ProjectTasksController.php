<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{
    /**
     * Show the task form to create a new task
     */
    public function create(Project $project) {
        return view('tasks/create', compact('project'));
    }

    /**
     * Store a task for a project
     */
    public function store(Project $project) {
        $attributeTask = $this->validateTask();
        $attributeTask['project_id'] = $project->id;
        Task::create($attributeTask);

        return redirect('projects/' . $project->id);
    }

    /**
     * Update a specified task for a project
     */
    public function update(Project $project, Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }

    public function validateTask() {
        return request()->validate([
            'description' => ['required', 'min:3', 'max:20']
        ]);
    }
}
