<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['completed', 'description', 'project_id'];
    /**
     * Task belongs to a project
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function project() {
//        return $this->belongsTo(Project::class);
//    }
}
