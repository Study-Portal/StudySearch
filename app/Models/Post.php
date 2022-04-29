<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Tag()
    {
        return $this->hasMany(Tag::class);
    }

    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
