{{-- 
<!DOCTYPE html>
<html dir="rtl" lang="ar"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>page</title>
</head>
<body>
<header>

@include('admin.inc.header')

</header>



@yield('content')





<footer>

@include('admin.inc.footer')
</footer>
    
</body>
</html>

 --}}




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
     <header class="navbar">
         <div class="container-fluid">
             <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>

             



             <ul class="nav navbar-nav hidden-md-down">
                 <li class="nav-item">
                     <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
                 </li>
 
               
             </ul>
             <ul class="nav navbar-nav pull-left hidden-md-down">
                 <li class="nav-item">
                     <a class="" href="333"><i class="333">   الذهاب الى الموقع </i><span class=""></span></a>
                 </li>
                
                
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                         <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                         <span class="hidden-md-down">مدیر</span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                         <div class="dropdown-header text-xs-center">
                             <strong>تنظیمات</strong>
                         </div>
                         <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                         <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> تنظیمات</a>
                         <!--<a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="tag tag-default">42</span></a>-->
                         <div class="divider"></div>
                         <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> خروج</a>
                     </div>
                 </li>
               
 
             </ul>
         </div>
     </header>
       @include('backend.layouts.sidebar')
     <!-- Main content -->
     <main class="main">
 
            

      @yield('content')



     </main>
 
     
 
     <footer class="footer">
         <span class="text-left">
             <a href="#">مكتبة النور</a> &copy; 2024
         </span>
        
     </footer>
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
 