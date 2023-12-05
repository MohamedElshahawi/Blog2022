<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'email', 'approved' ,'user_id' , 'post_id' , 'comment'
    ];


       // how to call database by relation in model and get it in 
       
    //    public function user()
    //    {
    //        return $this->belongsTo('App\models\user', 'user_id')->first()->name;
    //    }

       public function post()
       {
           return $this->belongsTo('App\models\post', 'post_id');
       }


       
}
