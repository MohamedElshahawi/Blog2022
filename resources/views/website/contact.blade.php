<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @section('title' , 'contact')
    
   @include('layouts.inc2.head')
  </head>
  <body>


	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="{{route('welcome')}}">Home</a></li>
					<li><a href="{{route('about')}}">About</a></li>
					<li class="colorlib-active"><a href="{{route('contact')}}">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				@foreach ($setting as $item)
					
				<h1 id="colorlib-logo" class="mb-4"><a href="{{route('welcome')}}" style="background-image: url({{URL::asset($item->logo)}});"> <span>{{$item->title}}</span><br></a></h1>
				@endforeach				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section contact-section px-md-4">
	      <div class="container">
				
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h3">Contact Information</h2>
	          </div>
			  @foreach ($contact as $contact)

	          <div class="w-100"></div>
	          <div class="col-lg-6 col-xl-3 d-flex mb-4">
	          	<div class="info bg-light p-4">
		            <p><span>Address:</span> {{$contact->address}}</p>
		          </div>
	          </div>
	          <div class="col-lg-6 col-xl-3 d-flex mb-4">
	          	<div class="info bg-light p-4">
		            <p><span>Phone:</span> <a href="tel://1234567920">+ {{$contact->phone}}</a></p>
		          </div>
	          </div>
	          <div class="col-lg-6 col-xl-3 d-flex mb-4">
	          	<div class="info bg-light p-4">
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">{{$contact->email}}</a></p>
		          </div>
	          </div>
	          <div class="col-lg-6 col-xl-3 d-flex mb-4">
	          	<div class="info bg-light p-4">
		            <p><span>Website</span> <a href="#">{{$contact->website}}</a></p>
		          </div>
	          </div>
	        </div>
	        <div class="row block-9">
	          <div class="col-lg-6 d-flex">
	            <form method="post" action="{{route('sendemail')}}" class="bg-light p-5 contact-form" enctype="multipart/form-data">
					@csrf
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Name" name="name">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Email" name="email">
	              </div>


	              {{-- <div class="form-group">
	                <input type="text" class="form-control" placeholder="Subject" name="subject">
	              </div> --}}

	              <div class="form-group">
	                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          
	          </div>

	          <div class="col-lg-6 d-flex">
	          	<div id="map" class="bg-light"></div>
	          </div>
	        </div>
			@endforeach

	      </div>
	    </section>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

    <!-- loader -->
@include('layouts.inc2.footer')
 
<!-- js code -->

@include('layouts.inc2.footer-scripts')
  </body>
</html>