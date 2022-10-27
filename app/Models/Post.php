<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'flag',
    ];

    public function setFlagAttribute($value)
    {
        $this->attributes['flag'] = json_encode($value);
    }
    public function getFlagAttribute($value)
    {
        return $this->attributes['flag'] = json_decode($value);
    }
}
