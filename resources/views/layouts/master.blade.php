<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/p31xa2r7q19v71mm1gsv44tws2pyfrjru374qmn01cq7szw2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</head>
<body>
   

    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
         @include('layouts.inc.admin-sidebar')

         <div id="layoutSidenav_content">
            <main class="container px-5">
                @yield('content')
            </main>
            @include('layouts.inc.admin-footer')

         </div>














    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    
</body>
</html>