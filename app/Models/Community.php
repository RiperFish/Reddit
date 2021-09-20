<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Community extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'description',
    ];

    public function topics(){
        return $this->belongsToMany(Topic::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
