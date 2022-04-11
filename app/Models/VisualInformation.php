<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisualInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'asset',
        'type',
    ];

    public function getIconUrlAttribute()
    {
        return !empty($this->attributes['icon']) ? asset($this->attributes['icon']) : '';
    }

    public function getAssetUrlAttribute()
    {
        return !empty($this->attributes['asset']) ? asset($this->attributes['asset']) : '';
    }
}
