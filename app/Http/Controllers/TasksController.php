<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends Controller
{
    public function destroy($project_id, $task_id) {
        Task::findOrFail($task_id)->delete();

        return back();
    }
}
