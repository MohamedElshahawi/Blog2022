@extends('layouts.inc2.master')


@section('title' , 'Welcome')

@section('mainContent')
    
    

<div class="col-xl-8 py-5 px-md-5">
					
    <div class="row pt-md-4">   

@foreach ($posts as $item)
    
            <div class="col-md-12">
              <div class="blog-entry ftco-animate d-md-flex">
                  <a href="{{route('post' , $item->id)}}" class="img img-2" style="background-image: url({{URL::asset($item->coverPhoto)}})"></a>
                  <div class="text text-2 pl-md-4">
                  <h3 class="mb-2"><a href="{{route('post' , $item->id)}}">{{$item->title}}</a></h3>
        <div class="meta-wrap">
            <p class="meta">
                <span><i class="icon-calendar mr-2"></i>{{$item->created_at->format('d M Y')}}</span>
                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>{{$item->getCatName()}}</a></span>
                <span><i class="icon-comment2 mr-2"></i>{{ $item->countComments() }} Comment</span>
            </p>
        </div>
        <p class="mb-4">{{$item->smallDescription}}</p>
        <p><a href="{{route('post' , $item->id)}}" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
      </div>
              </div>
          </div>

          @endforeach





    </div><!-- END-->


    <div class="row">
  <div class="col">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
        {{-- {!! $posts->links() !!} --}}

      </ul>
    </div>
  </div>
</div>

</div>

@endsection
