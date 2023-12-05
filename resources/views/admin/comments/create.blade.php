@extends('layouts.master')

@section('title' , 'Create Comment')

    
@section('content')


    

<br>



<section style="background-color: #212529;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-dark">
          <div class="card-body p-4">
            <h4 class="mb-0">Recent comments</h4>
            <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
            @foreach ($comments as $comment)
            
            <hr class="my-0" />
            <br>
            {{-- <hr class="my-0" style="height: 1px;" /> --}}

            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://bootdey.com/img/Content/user_1.jpg" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">{{$comment->name}}</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    {{$comment->created_at->format('d M Y')}}
                  </p>
                </div>
                <p class="mb-0">
                  {{$comment->comment}}
                </p> 
              </div>
              </div>
              
            <br>
          {{-- <hr class="my-0" style="height: 1px;" /> --}}

            @endforeach

          </div>
                    <hr class="my-0" style="height: 1px;" />

          <div class="container" style="margin: 20px">
            <form method="POST" action="{{route('comments.store' , $post->id)}}" enctype="multipart/form-data">
                @csrf
            
                <div class="mb-3 form-group">
                    <label for="comment" class="form-label">Create Comment</label>
                    <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary form-group">Submit Comment
                  <a href="#" class="link-muted" style="color: white"><i class="fas fa-pencil-alt ms-2"></i></a>

                </button>
            </form>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
























