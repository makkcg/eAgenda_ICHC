<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'image',
        'social_id',
        'access_token',
        'device_token',
        'country_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageUrlAttribute()
    {
        return !empty($this->attributes['image']) ? asset($this->attributes['image']) : '';
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function calenders()
    {
        return $this->hasMany(Calender::class);
    }

    public function tasks()
    {
        return $this->hasManyThrough(Task::class, TaskList::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
