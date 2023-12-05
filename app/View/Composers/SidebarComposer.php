<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Categories;
use App\Models\Post;


class SidebarComposer
{

    private $categories;
    private $posts;




    public function __construct(Categories $categories, Post $posts)
    {
        $this->categories = $categories;
        $this->posts = Post::join('comments as comment', 'comment.post_id', '=', 'posts.id')
            ->orderBy('created_at', 'asc')
            ->select('posts.*')
            // ->paginate(5);
            ->latest()
            ->take(2)
            ->get();


    }


    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories->all());
        $view->with('posts', $this->posts->all());
    }
}
