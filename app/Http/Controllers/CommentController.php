<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// Illuminate\Database\Eloquent\Collection;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
         $comments = Comment::all();
        return view('admin.comments.index' , compact('posts' , 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $comments = Comment::query()->where('post_id', $id)->get();
   
        return view('admin.comments.create', compact('post' , 'comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'comment' => 'required'
        ]);

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $request->id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect()->route('comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $comment = Comment::query()->where('post_id', $id)->get();
        $comment = Comment::find($id);

        return view('admin.comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $comment = Comment::query()->where('post_id', $id)->get();
        $comment = Comment::find($id);

        return view('admin.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'approved' => 'required'
        ]);
        // $comment = Comment::query()->where('post_id', $id)->get();
        $comment = Comment::find($id);

        $comment->approved = $request->approved;
       
        $comment->save();
 
         return redirect()->route('comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = comment::find($id);
        $comment->delete();
        return redirect()->route('comments');
    }
}
