<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends Controller
{
    /**
     * Show the form for editing a task
     */
    public function edit(Project $project, Task $task) {
        return view('tasks/edit', compact('project','task'));
    }

    /**
     * Update a specified task that belongs to a project
     */
    public function update(Project $project, Task $task) {
        $task->update($this->validateTask());

        return redirect()->action('ProjectsController@show', [$project]);
    }

    /**
     * Delete a project's task
     */
    public function destroy(Project $project, Task $task) {
        Task::destroy($task->id);

        return back();
    }

    public function validateTask() {
        return request()->validate([
            'description' => ['required', 'min:3', 'max:30']
        ]);
    }
}
