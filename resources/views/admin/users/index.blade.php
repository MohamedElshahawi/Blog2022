@extends('layouts.master')

@section('title' , 'users')

    
@section('content')
    





<div class="container-fluid px-4 ">
  
<h1 class="mt-4">Users</h1>
{{-- <a class="btn btn-success md-5" href="{{route('categories.create')}}">Create Category</a> --}}
</div>

{{-- {{$users->count()}} --}}
<br>

<hr>

<br>

<div class="container-fluid px-5">
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">id</th>
        <th scope="col">User Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
  




        {{-- @php(dd($categories)) --}}
      @foreach ($users as $item)


      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>
        
          @if ($item->role_as == 1)
          Admin
      @else
          User
      @endif
        </td>

         <td>
          <div class="row">
          <div class="col-sm">
            <a href="{{route('users.edit' ,$item->id)}}" class="btn btn-success">Edit</a>

          </div>
          <div class="col-sm">
            <a href="{{route('users.show' ,$item->id)}}" class="btn btn-primary">Show</a>

          </div>
          <div class="col-sm">

            <form action="{{route('users.destroy' ,$item->id)}}" method="POST"> 
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