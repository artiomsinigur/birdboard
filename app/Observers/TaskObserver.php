<?php

namespace App\Observers;

use App\Task;

class TaskObserver
{
    /**
     * Handle the task "created" event.
     * Creating a new task records project activity
     * @param  \App\Task  $task
     * @return void
     */
    public function created(Task $task)
    {
        $task->project->recordActivity('task_created');
    }

    /**
     * Handle the task "updated" event.
     * Updating a task records project activity
     * @param  \App\Task  $task
     * @return void
     */
    public function updated(Task $task)
    {
        if (request()->has('completed')) {
            $task->project->recordActivity('task_completed');
        }
    }

    /**
     * Handle the task "deleted" event.
     * Deleting a task records project activity
     * @param  \App\Task  $task
     * @return void
     */
    public function deleted(Task $task)
    {
        $task->project->recordActivity('task_deleted');
    }
}
