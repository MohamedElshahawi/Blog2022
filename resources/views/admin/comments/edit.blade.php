@extends('layouts.master')

@section('title' , 'edit')

    
@section('content')

<br>



<section style="background-color: hsla(0, 2%, 12%, 0.829);">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-dark">
          <div class="card-body p-4">
            <h4 class="mb-0">Recent comments</h4>
            <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
            {{-- @foreach ($comment as $comment) --}}
            
            <hr class="my-0" />
            <br>
            {{-- <hr class="my-0" style="height: 1px;" /> --}}

            <div class="d-flex flex-start">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://bootdey.com/img/Content/user_1.jpg" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">{{$comment->name}}</h6>

                <button type="button" class="btn btn-primary btn-sm">
                    @if ($comment->approved == 0)
                    Pendding
                    @else
                    Approved
                    @endif

                  </button>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                    {{$comment->created_at->diffForHumans()}}
                  </p>
                </div>
                <p class="mb-0">
                  {{$comment->comment}}
                </p>
                <br>
                                          <hr class="my-0" style="height: 1px;" />

                <div class="d-flex align-items-center mb-3">
                    <form method="POST" action="{{route('comments.update' ,$comment->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input class="form-check-input" type="radio" name="approved" id="flexRadioDefault1" value="0" @if(!$comment->approved) checked @endif>
    <label class="form-check-label" for="flexRadioDefault1">
      Pendding
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="approved" id="flexRadioDefault2" value="1" @if($comment->approved) checked @endif>
    <label class="form-check-label" for="flexRadioDefault2">
      Approved
    </label>
  </div>


<br>
    <button type="submit" class="btn btn-primary form-group">Update</button>
</form>
                </div>
              </div>
            </div>
            <br>
          {{-- <hr class="my-0" style="height: 1px;" /> --}}

            {{-- @endforeach --}}

          </div>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection

















{{-- <form method="POST" action="{{route('comments.update' ,$comment->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input class="form-check-input" type="radio" name="approved" id="flexRadioDefault1" value="0" @if(!$comment->approved) checked @endif>
    <label class="form-check-label" for="flexRadioDefault1">
      Pendding
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="approved" id="flexRadioDefault2" value="1" @if($comment->approved) checked @endif>
    <label class="form-check-label" for="flexRadioDefault2">
      Approved
    </label>
  </div>


<br>
    <button type="submit" class="btn btn-primary form-group">Update</button>
</form> --}}