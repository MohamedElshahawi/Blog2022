<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Categories;
use App\Models\Comment;


class DashboardController extends Controller
{
    public function index (){

      $users= User::all();
      $categories= Categories::all();
      $posts= Post::all();
      $comments= Comment::all();


       
        return view('admin.dashboard'  ,compact('users' ,'categories' , 'posts' , 'comments'));
    }
}
