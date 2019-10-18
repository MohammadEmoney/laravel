<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'project_id', 'compeleted'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
