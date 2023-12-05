@extends('layouts.master')

@section('title' , 'Comments')

    
@section('content')
    





<div class="container-fluid px-4 ">
  
<h1 class="mt-4">Comments</h1>
{{-- <a class="btn btn-success md-5" href="{{route('posts.create')}}">Create Post</a> --}}
</div>

<br>

<hr>

<br>

<div class="container-fluid px-5">
<table class="table">
    <thead>
      <tr>
        {{-- <th scope="col">Tilte</th> --}}
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">Comments</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>




      </tr>
    </thead>
    <tbody>
      {{-- @foreach ($posts as $item) --}}
          @foreach ($comments as $comment)
              

      <tr>
        {{-- <td>{{$item->title}}</td> --}}
        <td>{{$comment->name}}</td>
        <td>{{$comment->email}}</td>
        <td>{{$comment->comment}}</td>
        
        <td>@if ($comment->approved == 0)
        Pendding
        @else
        Approved
        @endif
        </td>


        


         <td>
          <div class="row">
          {{-- <div class="col-sm">
            <a href="{{route('comments.create' ,$comment->id)}}" class="btn btn-success btn-sm">Create</a>
            
          </div> --}}
          
          <div class="col-sm">
            <a href="{{route('comments.show' ,$comment->id)}}" class="btn btn-primary btn-sm">Show</a>

          </div>
          <div class="col-sm">
            <a href="{{route('comments.edit' ,$comment->id)}}" class="btn btn-warning btn-sm">Edit</a>

          </div>
          <div class="col-sm">

            <form action="{{route('comments.destroy' ,$comment->id)}}" method="POST">
              @method('DELETE')
              @csrf
                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
            </form>
          </div>
        </div>

          

         </td>
       </tr>

       @endforeach

      {{-- @endforeach --}}
        
        
     
    </table>
</div>












@endsection