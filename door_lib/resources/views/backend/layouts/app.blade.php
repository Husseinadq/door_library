
 <!DOCTYPE html>
 <html dir="rtl" lang="ar">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
     <meta name="author" content="Lukasz Holeczek">
     <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
     <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
     <title>Dashboard</title>
     <!-- Icons -->
     <link href="{{asset('adminassets/css/font-awesome.min.css')}}" rel="stylesheet">
     <link href="{{asset('adminassets/css/simple-line-icons.css')}}" rel="stylesheet">
     <!-- Main styles for this application -->
     <link href="{{asset('adminassets/dest/style.css')}}" rel="stylesheet">
 </head>


 <body class="navbar-fixed sidebar-nav fixed-nav">
     @include("backend.inc.header")
     @include('backend.inc.sidebar')

      @yield('content')


     @include('backend.inc.footer')
     <!-- Bootstrap and necessary plugins -->
     <script src="{{asset('adminassets/js/libs/jquery.min.js')}}"></script>
     <script src="{{asset('adminassets/js/libs/tether.min.js')}}"></script>
     <script src="{{asset('adminassets/js/libs/bootstrap.min.js')}}"></script>
     <script src="{{asset('adminassets/js/libs/pace.min.js')}}"></script>

     <!-- Plugins and scripts required by all views -->
     <script src="{{asset('adminassets/js/libs/Chart.min.js')}}"></script>

     <!-- CoreUI main scripts -->

     <script src="{{asset('adminassets/js/app.js')}}"></script>

     <!-- Plugins and scripts required by this views -->
     <!-- Custom scripts required by this view -->
     <script src="{{'adminassets/js/views/main.js'}}"></script>

     <!-- Grunt watch plugin -->
     <script src="//localhost:35729/livereload.js"></script>
 </body>

 </html>
