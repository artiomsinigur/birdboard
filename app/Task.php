<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Task belongs to a project
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
//    public function project() {
//        return $this->belongsTo(Project::class);
//    }
}
