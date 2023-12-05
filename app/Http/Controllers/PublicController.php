<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;
use App\Models\Comment;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\About;
use Illuminate\Support\Facades\DB;



class PublicController extends Controller
{
    public function viewPosts(Post $post)
    {


        $counters = $post->comments()->count();
 

        $posts = Post::paginate(5);
        

        return view('welcome', compact('posts' , 'counters'));

    }


    public function singlePost($id)
    {

        $post = Post::where('id', $id)->firstOrFail();
        // dd($post);
        $comments = Comment::where('post_id', $id)->where('approved', '=', 1)->get();




        return view('website.post', compact('post', 'comments'));
    }


    public function storeComment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);


        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->approved = 0;
        $comment->post_id = $request->id;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->back();
    }


   public function contactInfo(){
   
   $contact = Contact::all();
    return view('website.contact', compact('contact'));

   }


   public function aboutInfo(){
   $about = About::all();
   
    return view('website.about' , compact('about'));

   }


   public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $posts = Post::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('content', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('website.search', compact('posts'));
}









}
