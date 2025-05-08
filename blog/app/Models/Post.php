<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // Define the fillable fields to protect against mass-assignment
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'user_id',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);  // A post belongs to a user
    }

    // Optionally, if you want to automatically create the slug from the title
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });

        static::saving(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }
}
