@extends('layouts.inc2.master')

@section('title' , 'search')


@section('mainContent')

    

@if($posts->isNotEmpty())
    @foreach ($posts as $post)
        {{-- <div class="post-list">
            <p>{{ $post->title }}</p>
            <p>{{ $post->content }}</p>
        </div> --}}


<div class="col-lg-8 px-md-5 py-5">
      
    <div class="row pt-md-4">
        <h1 class="mb-3" name="title">{{$post->title}}</h1>

<p name="content">{!!$post->content!!}</p>
</div>


@endforeach
@else 
    <div>
        <h2>No posts found</h2>
    </div>
@endif 




@endsection