@extends('layouts.master')

@section('title' , 'create')

    
@section('content')

<br>
@if($errors->any())
<div class="alert alert-danger" role="alert">
  
  {{ implode('', $errors->all(':message')) }}
  <br>
</div>

@endif


<div class="container" style="margin: 20px">
   <form method="POST" {{route('categories.store')}}>
       @csrf
   
       <div class="mb-3 form-group">
         <label for="categoryname" class="form-label">Category Name</label>
         <input type="text" class="form-control" id="categoryname" name="name">
       </div>

        <button type="submit" class="btn btn-primary form-group">Create</button>
   </form>
</div>




@endsection