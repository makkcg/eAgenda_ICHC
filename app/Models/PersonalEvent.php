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
        'description',
        'color',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'all_day',
        'repeat_type',
        'repeat_every_type',
        'repeat_every',
        'repeat_end_type',
        'repeat_end',
        'reminder',
    ];
}
