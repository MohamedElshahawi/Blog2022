<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>

   @include('layouts.inc2.head')
  </head>
  <body>


	<div id="colorlib-page">

      <!-------------- the main side bar   ---------------------->
		@include('layouts.inc2.main-sidebar')
      <!---------------- the end  main side bar ---------------- -->




		<div id="colorlib-main">
			<section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container">
	    		<div class="row d-flex">




<!----------------------- the start main content  here !!---------------- -->



    @yield('mainContent')



<!------------------------------ end of content   ------------------------------------>




	    <!----------------- end of start side bar here  ------------------>
		
			  @include('layouts.inc2.sec-sidebar')

		<!------------------ end of end sec side bar here  -=----------------->


					
	    		</div>
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