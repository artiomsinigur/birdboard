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
        $project->addTask($this->validateTask());

        return redirect('projects/' . $project->id);
    }

    public function validateTask() {
        return request()->validate([
            'description' => ['required', 'min:3', 'max:50']
        ]);
    }
}
