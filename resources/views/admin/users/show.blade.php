@extends('layouts.master')

@section('title' , 'show')

    
@section('content')



<br>



  <div class="card">
    <div class="card-header">
      User Name : {{$user->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">User Role :@if ($user->role_as == 1)
        Admin
        @else
        User
        @endif</h5>
      <p class="card-text">User id : {{$user->id}}</p>

      <p class="card-text">User Email : {{$user->email}}</p>
    </div>
  </div>
@endsection