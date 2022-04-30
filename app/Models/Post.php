<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'description',
        'private',
        'user_id',
        'subject_id',
        'directory'
    ];

    public function toSearchableArray()
    {
        return ['title', 'description'];
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Tag()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function SavePost()
    {
        return $this->hasMany(Save::class);
    }
}
