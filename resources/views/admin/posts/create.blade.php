@extends('layouts.master')

@section('title' , 'create')
    
@section('content')



@if($errors->any())
<div class="alert alert-danger" role="alert">
  <br>
  {{ implode('', $errors->all(':message')) }}
  <br>
</div>

@endif
    


<div class="container" style="margin: 20px">
   <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
       @csrf
   
       <div class="mb-3 form-group">
         <label for="title" class="form-label">Title</label>
         <input type="text" class="form-control" id="title" name="title">
       </div>

       <div class="mb-3 form-group">
        <label for="smallDescription" class="form-label">Small Description</label>
        <textarea class="form-control" id="smallDescription" rows="2" name="smallDescription"></textarea>
       </div>

       <div class="mb-3 form-group">
        <label for="formFile" class="form-label">Cover Photo</label>
        <input class="form-control" type="file" id="formFile" name="coverPhoto">
      </div>

       <div class="mb-3 form-group">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" rows="20" name="content"></textarea>
      </div>

      <div class="mb-3 form-group">
        <label for="formFile" class="form-label">Post a Photo</label>
        <input class="form-control" type="file" id="formFile" name="postPhoto">
      </div>


      <div class="mb-3 form-group">
        <label for="tags" class="form-label">Tags</label>
        <input type="text" class="form-control" id="tags" name="tag">
      </div>

      

      <div class="mb-3 form-group">
        <label for="select" class="col-4 col-form-label">Categories</label> 
        <div class="col-8">
          <select id="select" name="categories_id" class="custom-select">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
            
          </select>
        </div>
      </div> 

        <button type="submit" class="btn btn-primary form-group">Save</button>
   </form>
</div>



<script>
  tinymce.init({
    selector: '#content'
  });
</script>







@endsection