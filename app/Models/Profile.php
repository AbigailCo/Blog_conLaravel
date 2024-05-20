<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   

    use HasFactory;
    protected $guarder =['id','created_at','updated_at'];

    // crear relacion inversa (Profile-User)
    public function user(){
        return $this->belongsTo(User::class);
    }
}
