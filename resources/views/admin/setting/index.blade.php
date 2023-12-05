@extends('layouts.master')

@section('title' , 'setting')

    
@section('content')





<div class="container-fluid px-4 ">
  
    <h1 class="mt-4">Website Setting</h1>
    
    </div>
    
    <br>
    
<div class="container">
    
  <div class="row">
    <div class="col-sm">
      <a href="{{route('adContact')}}" class="btn btn-primary">Contact Page</a>

    </div>
    <div class="col-sm">
      <a href="{{route('adAbout')}}" class="btn btn-primary">About Page</a>

    </div>


</div>
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
            <th scope="col">Image</th>
            <th scope="col">Email</th>
            <th scope="col">Manintenance Mode</th>
    
    
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
         

  
            
          @foreach ($setting as $item)
            
         
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>
              <img class="img-tumbnail" width="100" height="100" src="{{URL::asset($item->logo)}}" alt="{{$item->logo}}">
            </td>
            <td>{{$item->email}}</td>
            {{-- @dd($setting) --}}
            <td>
            @if ($item->maintenance_mode == 0)
                OFF
            @else
                ON
            @endif
            
            
            </td>
    
    
             <td>
              <div class="row">
              <div class="col-sm">
                <a href="{{route('setting.edit' ,$item->id)}}" class="btn btn-success">Edit</a>
    
              </div>
              
                </form>
              </div>
            </div>
    
              
    
             </td>
           </tr>
    
    
          @endforeach
            
            
         
        </table>
















@endsection