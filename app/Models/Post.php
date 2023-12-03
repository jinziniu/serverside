<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    

    
    protected $with = ['category', 'author'];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
 
}
