@extends('layouts.master')

@section('title' , 'edit')

    
@section('content')


<div class="container" style="margin: 20px">
   <form method="POST" action="{{route('categories.update' , $category->id)}}" enctype="multipart/form-data">
       @csrf
       @method('PUT')
   
       <div class="mb-3 form-group">
         <label for="categoryname" class="form-label">Category Name</label>
         <input type="text" class="form-control" id="categoryname" name="name" value="{{$category->name}}">
       </div>

        <button type="submit" class="btn btn-primary form-group">Update</button>
   </form>
</div>




@endsection