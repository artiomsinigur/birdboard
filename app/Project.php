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

        // Creating a new task records project activity
//        Activity::create([
//            'project_id' => $this->id,
//            'description' => 'created_task'
//        ]);
    }

    public function activity() {
        return $this->hasMany(Activity::class);
    }
}
