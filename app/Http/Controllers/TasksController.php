<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends Controller
{
    /**
     * Update a specified task that belongs to a project
     */
    public function update(Project $project, Task $task) {
        $this->authorize('update', $project);

        $attributes = $this->validateTask();
        $attributes['completed'] = request()->has('completed');
        $task->update($attributes);

//        if (request()->has('completed')) {
//            Activity::create([
//                'project_id' => $project->id,
//                'description' => 'complete_task'
//            ]);
//        }

        return redirect()->action('ProjectsController@show', [$project]);
    }

    /**
     * Delete a project's task
     */
    public function destroy(Project $project, Task $task) {
        $this->authorize('delete', $project);

        Task::destroy($task->id);

        return back();
    }

    public function validateTask() {
        return request()->validate([
            'description' => ['required', 'min:3', 'max:50']
        ]);
    }
}
