<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'dimensions',
        'materials',
        'make',
        'user_id',
        // 'tag',
        //'post_image'
    ];


    public function user(){
        return $this->hasOne(User::class);
    }

    public function image(){
        return $this->hasMany(Image::class);
    }
    
    
    //public function comments(){
    //    return $this->hasMany(Comment::class);
    //}

    // public function hasComments($role){
    //     return null !== $this->roles()->where('name', $role)->first();
    // }

    

}