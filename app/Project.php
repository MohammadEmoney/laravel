<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);
        // $this->tasks()->create(compact('description'));
        // return Task::create([
        //     'description' => $description,
        //     'project_id' => $this->id
        // ]);
    }
}
