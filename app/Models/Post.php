<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'smallDescription',
        'content',
        'coverPhoto',
        'postPhoto',
        'tag',
        'user_id',
        'categories_id'

    ];

    
    // how to call database by relation in model and get it in 
    public function comments()
    {
        return $this->hasMany('App\Models\Comment' , 'post_id');
    }


    public function user()
    {
        return $this->belongsTo('App\models\user', 'user_id')->first()->name;
    }

    public function getCatName()
    {
        return $this->belongsTo('App\models\Categories', 'categories_id')->first()->name;

    }
    public function countComments()
    {
        return $this->hasMany('App\Models\Comment' , 'post_id')->get()->count();
    }    
   
   


}
