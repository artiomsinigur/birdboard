<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'owner_id', 'notes'];

    /**
     * Project has many tasks
     */
    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function addTask($task) {
        $this->tasks()->create($task);
    }

    public function activity() {
        return $this->hasMany(Activity::class)->latest();
    }

    /**
     * Record an activity for project and task
     */
    public function recordActivity($type) {
        $this->activity()->create(['description' => $type]);
    }
}
