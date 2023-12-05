
@extends('layouts.inc2.master')

@section('title' , $post->title)


@section('mainContent')
{{-- {{dd($post->title)}}; --}}


<div class="col-lg-8 px-md-5 py-5">
      
    <div class="row pt-md-4">
        <h1 class="mb-3">{{$post->title}}</h1>
<p>{{$post->smallDescription}}</p>
<p>
  <img src="{{URL::asset($post->coverPhoto)}}" alt="" class="img-fluid">
</p>
<p>{!!$post->content!!}</p>
<p>
  <img src="{{URL::asset($post->postPhoto)}}" alt="" class="img-fluid">
</p>
<div class="tag-widget post-tag-container mb-5 mt-5">
  <div class="tagcloud">
    <a href="#" class="tag-cloud-link">{{$post->tag}}</a>
    
  </div>
</div>

<div class="about-author d-flex p-4 bg-light">
  <div class="bio mr-5">
    {{-- <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4"> --}}
  </div>
  <div class="desc">
    <h3>{{$post->user()}}</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
  </div>
</div>

{{-- comments !! ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; --}}


     

<div class="pt-5 mt-5">
  <h3 class="mb-5 font-weight-bold">Comments</h3>
  
      
<ul class="comment-list">
  @foreach ($comments as $comment)

  <li class="comment">
    <div class="vcard bio">
      <img src="{{URL::asset('assets/web/images/userphoto.jpg')}}" alt="user image">
    </div>
    <div class="comment-body">
      <h3>{{$comment->name}}</h3>
      <div class="meta">{{$comment->created_at->format('d M Y')}}</div>
      <p>{{$comment->comment}}</p>
      {{-- <p><a href="#" class="reply">Reply</a></p> --}}
    </div>
  </li>
  @endforeach

</ul>  
   

  

  
  <!-- END comment-list -->
  {{-- @if ($comments->approved == 1)
  <div class="alert alert-success" role="alert">
      Success Your comment Is Pendding Now !
  </div>
  
      
  @endif --}}
  
  <div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form class="p-3 p-md-5 bg-light" method="POST" action="{{route('post.store' , $post->id)}}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
     
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
      </div>

      
    </form>
  </div>
</div>
    </div><!-- END-->
</div>




@endsection
