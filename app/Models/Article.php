<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarder =['id','created_at','updated_at'];

    //crear la realcion de uno a muchos inversa (articles-user)

    public function user(){
        return $this->belongsTo(User::class);
    }

    //crear realacion uno a uno (Articulos-Profile)

    public function profile(){
        return $this->hasOne(Profile::class);
    }

     //crear realacion de uno a muchos (Article-Comment)
public function comments(){
    return $this->hasMany(Comment::class);
}

//crear la realcion de uno a muchos inversa (Category-Article)

public function category(){
    return $this->belongsTo(Category::class);
}

}
