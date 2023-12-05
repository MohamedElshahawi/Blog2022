@extends('layouts.master')

@section('title' , 'show')

    
@section('content')


<br>
<div class="container">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text"><small class="text-muted">{{$post->user()}}</small></p>
    <p class="card-text"><small class="text-muted">{{$post->getCatName()}}</small></p>
    <p class="card-text">{{$post->smallDescription}}</p>
    <p class="card-text"><small class="text-muted">{{$post->created_at->format('d M Y')}}</small></p>
  </div>
  <img src="{{URL::asset($post->coverPhoto)}}" class="card-img-bottom" alt="{{$post->coverPhoto}}">

  <div class="card-body">
    <p class="card-text">{!!$post->content!!}</p>
    <p><a href="#" class="btn btn-secondary btn-md disabled"  role="button" aria-disabled="true">{{$post->tag}}</a></p>
  </div>
  <img src="{{URL::asset($post->postPhoto)}}" class="card-img-bottom" alt="{{$post->postPhoto}}" >
</div>
</div>



@endsection