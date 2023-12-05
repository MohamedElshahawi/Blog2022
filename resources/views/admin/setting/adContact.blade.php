@extends('layouts.master')

@section('title' , 'contact')

    
@section('content')
<br>
<h3>Contact</h3>
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
        <form method="POST" action="{{route('contact.update' ,  $contact->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3 form-group">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" rows="2" name="address">{{$contact->address}}</textarea>
               </div>
     
               <div class="mb-3 form-group">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$contact->phone}}">
              </div>


              <div class="mb-3 form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}">
              </div>
     
     
           <div class="mb-3 form-group">
             <label for="website" class="form-label">Website</label>
             <input type="text" class="form-control" id="website" name="website" value="{{$contact->website}}">
           </div>
     
           
     
         
     
             <button type="submit" class="btn btn-primary form-group">Update</button>
        </form>
     </div>





@endsection