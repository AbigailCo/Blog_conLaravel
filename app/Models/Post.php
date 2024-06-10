<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'poster',
        'image_path',
    ];
    public function likes()
    {
        return $this->hasMany(PostLike::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class); 
    }
    public function user()
    {
        return $this->belongsTo(User::class); 
    }
    
}
