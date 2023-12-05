@extends('layouts.master')

@section('title' , 'edit')

    
@section('content')
<br>
@if($errors->any())
<div class="alert alert-danger" role="alert">
  
  {{ implode('', $errors->all(':message')) }}
  <br>
</div>

@endif

<div class="container" style="margin: 20px">
   <form method="POST" action="{{route('setting.update' ,$setting->id)}}" enctype="multipart/form-data">
       @csrf
       @method('PUT')
   
       <div class="mb-3 form-group">
         <label for="title" class="form-label">Website Title</label>
         <input type="text" class="form-control" id="title" name="title" value="{{$setting->title}}">
       </div>

       

      <div class="mb-3 form-group">
        <label for="formFile" class="form-label">Logo</label>
        <input class="form-control" type="file" id="formFile" name="logo" value="{{$setting->logo}}">
    
        <img class="img-tumbnail" width="100" height="100" src="{{URL::asset($setting->logo)}}" alt="{{$setting->logo}}">

      </div>

      <div class="mb-3 form-group">
        <label for="email" class="form-label"> Contact Email</label>
        <input class="form-control" type="email" id="email" name="email" value="{{$setting->email}}">
      </div>

  
      <b>Maintenance Mode</b>

         <div class="form-check">

        <input class="form-check-input" type="radio" name="maintenance_mode" id="flexRadioDefault1" value="0" @if(!$setting->maintenance_mode) checked @endif>
        <label class="form-check-label" for="flexRadioDefault1">
          OFF
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="maintenance_mode" id="flexRadioDefault2" value="1" @if($setting->maintenance_mode) checked @endif>
        <label class="form-check-label" for="flexRadioDefault2">
          ON
        </label>
      </div>

  
<br>
        <button type="submit" class="btn btn-primary form-group">Update</button>
   </form>
</div>




@endsection