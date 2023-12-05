@extends('layouts.master')

@section('title' , 'edit')

    
@section('content')


<div class="container" style="margin: 20px">
   <form method="POST" action="{{route('users.update' , $user->id)}}">
       @csrf
       @method('PUT')
   
       <div class="mb-3 form-group">
        <h3> user name : {{$user->name}}</h3>
        <h3> user email : {{$user->email}}</h3>

         <label for="categoryname" class="form-label">User Role</label>
         <input type="text" class="form-control" id="categoryname" name="role_as" value="{{$user->role_as}}">
         <br>
         <h4>notice:</4>
         <p>to make user have permission to access admin dashboard make role 1 instead of 0</p>

       </div>

        <button type="submit" class="btn btn-primary form-group">Update</button>
   </form>
</div>




@endsection