<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @section('title' , 'about')
    
   @include('layouts.inc2.head')
  </head>
  <body>


    <div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="{{route('welcome')}}">Home</a></li>
					<li class="colorlib-active"><a href="{{route('about')}}">About</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				@foreach ($setting as $item)
					
				<h1 id="colorlib-logo" class="mb-4"><a href="{{route('welcome')}}" style="background-image: url({{URL::asset($item->logo)}});"> <span>{{$item->title}}</span><br></a></h1>
				@endforeach
								<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
            @foreach ($about as $about)
                
			<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
	    	<div class="container-fluid px-0">
	    		<div class="row d-flex">
	    			<div class="col-md-6 d-flex">
	    				<div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image:url({{URL::asset($about->photo)}});">
	    				</div>
	    			</div>
	    			<div class="col-md-6 d-flex align-items-center">
	    				<div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
		            <h2 class="mb-4">I'm <span>{{$about->name}} </span> {{$about->title}} </h2>
		            <p>{{$about->subject}}</p>
	            </div>
		        </div>
	        </div>
	    	</div>
	    </section>
        @endforeach

		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->




















        <!-- loader -->
@include('layouts.inc2.footer')
 
<!-- js code -->

@include('layouts.inc2.footer-scripts')
  </body>
</html>