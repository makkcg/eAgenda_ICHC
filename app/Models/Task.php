<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_list_id',
        'title',
        'due_date',
        'notify',
        'status',
        'in_calender',
        'notes',
    ];

    public function taskList()
    {
        return $this->belongsTo(TaskList::class);
    }
}
