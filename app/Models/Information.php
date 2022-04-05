<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Information extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    protected $fillable = [
        'image',
        'flag',
    ];

    public $translatedAttributes = [
        'title',
        'body',
    ];

    public function getImageUrlAttribute()
    {
        return !empty($this->attributes['image']) ? asset($this->attributes['image']) : '';
    }

    public function getFlagUrlAttribute()
    {
        return !empty($this->attributes['flag']) ? asset($this->attributes['flag']) : '';
    }
}
