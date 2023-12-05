<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categories;
use App\Models\User;

use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        // dd($categories);
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //methods we can use with request 
        // guessExtension()
        //getMimeType()
        //store()
        //asStore()
        //storePublicly()
        //move()
        //getOriniganlName()

        // $test = $request->file('image')->getMimeType();
        // dd($test);

        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'smallDescription' => 'required',
            'content' => 'required',
            'coverPhoto' => 'required|mimes:jpeg,jpg,png,gif|max:3000',
            'postPhoto' => 'required|mimes:jpeg,jpg,png,gif|max:3000',
            'tag' => 'required',
            'categories_id' => 'required'
        ]);
        //Upload Image , Change name, save in public/images and save file name in database 



        $postPhoto = $request->postPhoto;
        $newPostPhoto = time() . $postPhoto->getClientOriginalName();
        $postPhoto->move(public_path('postphoto'), $newPostPhoto);

        $coverPhoto = $request->coverPhoto;
        $newCoverPhoto = time() . $coverPhoto->getClientOriginalName();
        $coverPhoto->move(public_path('image'), $newCoverPhoto);

        $post = new Post();
        $post->title = $request->title;
        $post->smallDescription = $request->smallDescription;
        $post->content = $request->content;
        $post->coverPhoto = 'image/' . $newCoverPhoto;
        $post->postPhoto = 'postphoto/' . $newPostPhoto;
        $post->tag = $request->tag;
        $post->categories_id = $request->categories_id;
        $post->user_id = Auth::user()->id;


        $post->save();
        return redirect()->route('posts');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->firstOrFail();

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();

        $post = Post::where('id', $id)->firstOrFail();

        return view('admin.posts.edit', compact('post' ,'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'title' => 'required',
            'smallDescription' => 'required',
            'content' => 'required',
            'tag' => 'required',
            'categories_id' => 'required'
        ]);
        

       $post = Post::find($id);
       $post->title = $request->title;
       $post->smallDescription = $request->smallDescription;
       $post->content = $request->content;
       $post->tag = $request->tag;
       $post->categories_id = $request->categories_id;
       $post->save();

        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts');
    }



/////////////////////////////////////////////////////////////////////////






}
