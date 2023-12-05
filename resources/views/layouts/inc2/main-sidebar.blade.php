<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib"><a href="{{route('welcome')}}">Home</a></li>

					<li><a href="{{route('about')}}">About</a></li>
					<li><a href="{{route('contact')}}">Contact</a></li>
				</ul>
			</nav>
                        <!-- the end of left sidebar -->
						<!-- the footer hereeeeeeeeeeeeeeeeeeeeeeee -->
			<div class="colorlib-footer">
				@foreach ($setting as $item)
					
				<h1 id="colorlib-logo" class="mb-4"><a href="{{route('welcome')}}" style="background-image: url({{URL::asset($item->logo)}});"> <span>{{$item->title}}</span><br></a></h1>
				@endforeach

				<div class="mb-4">
					<h3>Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form">
            <div class="form-group d-flex">
            	<div class="icon"><span class="icon-paper-plane"></span></div>
              <input type="text" class="form-control" placeholder="Enter Email Address">
            </div>
          </form>
				</div>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->