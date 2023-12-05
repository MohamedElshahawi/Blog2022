@extends('layouts.master')

@section('title' , 'Posts')

    
@section('content')
    





<div class="container-fluid px-4 ">
  
<h1 class="mt-4">Posts</h1>
<a class="btn btn-success md-5 float-end" href="{{route('posts.create')}}">Create Post</a>
<br>
</div>

<br>

<hr>

<br>

<div class="container-fluid px-5">
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">id</th>
        <th scope="col">Tilte</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Tags</th>
        <th scope="col">Writer</th>
        <th scope="col">Category</th>


        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
        {{-- @php(dd($categories)) --}}
      @foreach ($posts as $item)
          

      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->smallDescription}}</td>
        <td>
          <img class="img-tumbnail" width="100" height="100" src="{{URL::asset($item->coverPhoto)}}" alt="{{$item->coverPhoto}}">
          <img class="img-tumbnail" width="100" height="100" src="{{URL::asset($item->postPhoto)}}" alt="{{$item->postPhoto}}">

        </td>
        <td>{{$item->tag}}</td>
        <td>{{$item->user()}}</td>
        <td>{{ $item->getCatName() }}</td>


         <td>
          <div class="row">
          <div class="col-sm">
            <a href="{{route('posts.edit' ,$item->id)}}" class="btn btn-success">Edit</a>

          </div>
          <div class="col-sm">
            <a href="{{route('posts.show' ,$item->id)}}" class="btn btn-primary">Show</a>

          </div>
          <div class="col-sm">

            <form action="{{route('posts.destroy' ,$item->id)}}" method="POST">
              @method('DELETE')
              @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </div>
        </div>

          

         </td>
       </tr>


      @endforeach
        
        
     
    </table>
</div>












@endsection