@extends('layouts.master')

@section('title' , 'about')

    
@section('content')
<br>
<h3>About</h3>
<br>

@if($errors->any())
<div class="alert alert-danger" role="alert">
  
  {{ implode('', $errors->all(':message')) }}
  <br>
</div>

@endif
<br>
<hr>
<br>

    <div class="container" style="margin: 20px">
        <form method="POST" action="{{route('about.update' ,  $about->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3 form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$about->name}}">
              </div>
     
               <div class="mb-3 form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$about->title}}">
              </div>


              <div class="mb-3 form-group">
                <label for="subject" class="form-label">Subject</label>
                <textarea class="form-control" id="subject" rows="2" name="subject">{{$about->subject}}</textarea>
               </div>
     
     
               <div class="mb-3 form-group">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" id="formFile" name="photo" value="{{$about->photo}}">
            
                <img class="img-tumbnail" width="100" height="100" src="{{URL::asset($about->photo)}}" alt="{{$about->photo}}">
        
              </div>
           
     
         
     
             <button type="submit" class="btn btn-primary form-group">Update</button>
        </form>
     </div>





@endsection