<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends Controller
{
    public function destroy(Project $project, Task $task) {
        Task::destroy($task->id);

        return back();
    }
}
