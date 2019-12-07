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

//    public function owner() {
//        return $this->hasOne(Project::class, 'owner_id');
//    }
}
