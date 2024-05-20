<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarder =['id','created_at','updated_at'];


     //crear realacion de uno a muchos (Category-Articles)
public function article(){
    return $this->hasMany(Article::class);
}
}
