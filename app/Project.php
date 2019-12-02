<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description'];

    /**
     * Project has tasks many tasks
     */
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
