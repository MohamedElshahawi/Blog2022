<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    //Check error here in realtion with post
    public function posts()
    {
        return $this->hasMany('App\models\post ');
    }

    
}
