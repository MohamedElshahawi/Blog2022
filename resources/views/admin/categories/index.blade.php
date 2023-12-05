@extends('layouts.master')

@section('title' , 'Category')

    
@section('content')
    





<div class="container-fluid px-4 ">
  
<h1 class="mt-4">Category</h1>
<a class="btn btn-success md-5 float-end" href="{{route('categories.create')}}">Create Category</a>
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
        <th scope="col">Category Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        {{-- @php(dd($categories)) --}}
      @foreach ($categories as $item)
          

      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
         <td>
          <div class="row">
          <div class="col-sm">
            <a href="{{route('categories.edit' ,$item->id)}}" class="btn btn-success">Edit</a>

          </div>
          <div class="col-sm">
            <a href="{{route('categories.show' ,$item->id)}}" class="btn btn-primary">Show</a>

          </div>
          <div class="col-sm">

            <form action="{{route('categories.destroy' ,$item->id)}}" method="POST">
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