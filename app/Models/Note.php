<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'calender_id',
        'title',
        'color',
        'body',
        'reminder',
        'reminder_timestamp',
        'repetition',
        'in_calender',
    ];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
