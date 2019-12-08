<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['completed', 'description', 'project_id'];

    // When a task is updated we need that project time update too
    protected $touches = ['project'];

    public static function boot() {
        parent::boot();

        // Creating a new task records project activity
        static::created(function ($task) {
            $task->project->recordActivity('Task created');
        });

        // Updating a task records project activity
        if (request()->has('completed')) {
            static::updated(function ($task) {
                $task->project->recordActivity('Task completed');
            });
        }

        // Deleting a task records project activity
        static::deleted(function($task) {
            $task->project->recordActivity('Task deleted');
        });
    }

    /**
     * Task belongs to a project
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
