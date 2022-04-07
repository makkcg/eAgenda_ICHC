<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'calender_id',
        'title',
        'color',
        'reminder',
        'reminder_timestamp',
        'repetition',
    ];
}
