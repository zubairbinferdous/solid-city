<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> ADMIN PANEL </title>

    <!-- Scripts -->


    <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <link rel="icon" href="{{ asset('public/fontend/images/favicon.ico') }}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('public/fontend/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('public/fontend/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('public/fontend/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{ asset('public/fontend/css/app-style.css') }}" rel="stylesheet"/>

  <!-- Vector CSS -->
  <link href="{{ asset('public/fontend/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('public/fontend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('public/fontend/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('public/fontend/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('public/fontend/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('public/fontend/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('public/fontend/css/app-style.css') }}" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="{{ asset('public/fontend/css/skins.css') }}" rel="stylesheet"/>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <!-- Styles -->

</head>
<body>
    <div id="app">


         @guest



               @else

                         <!-- Start wrapper-->
           <div id="wrapper">

                          <!--Start sidebar-wrapper-->
            <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                <div class="brand-logo">
                 <a href="{{ URL::to('/') }}"><img src="{{ ('public/fontend/images/logo-icon.png') }}" class="logo-icon"></a>
                </div>

           <ul class="sidebar-menu">

              <li>
                  <a href="{{ route('home') }}" class="waves-effect">
                       <i class="zmdi zmdi-view-dashboard"></i> <span> ADMIN PANEL </span></i>
                  </a>

                    <li><a href="{{ route('neworder') }}"><i class="icon-rocket icons"></i> New Order </a></li>
                    <li><a href="{{ route('allorder') }}"><i class="icon-badge icons"></i> My All Order</a> </li>
                    <li><a href="{{ route('anycomp') }}"><i class="icon-envelope icons"></i> Any Complain </a></li>

               </li>

             </ul>
            </div>
                           <!--End sidebar-wrapper-->

                        <!--Start topbar header-->
                    <header class="topbar-nav">
                     <nav id="header-setting" class="navbar navbar-expand fixed-top">
                      <ul class="navbar-nav mr-auto align-items-center">
                        <li class="nav-item">
                          <a class="nav-link toggle-menu" href="javascript:void();">
                           <i class="icon-menu menu-icon"></i>
                         </a>
                        </li>
                        <li class="nav-item">
                          </li>
                        </ul>
                         <ul class="navbar-nav align-items-center right-nav-link">

                 <li class="nav-item">
               <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                 <span class="user-profile"><img src="{{ asset('public/fontend/images/user.png') }}" class="img-circle" alt="user avatar"></span>
              </a>
                <ul class="dropdown-menu dropdown-menu-right">
                 <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                          <div class="media">
                     <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('public/fontend/images/user.png') }}" alt="user avatar"></div>
                             <div class="media-body">
                              <h6 class="mt-2 user-title">{{ Auth::user()->name }}</h6>
                            <p class="user-subtitle">{{ Auth::user()->email }}</p>
                              </div>
                            </div>
                                  </a>
                         </li>
                     <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li></a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                 </form>
                              </ul>
                            </li>
                          </ul>
                        </nav>
                        </header>
                        <!--End topbar header-->
             @endguest


        <main class="py-4">
            @yield('admin_content')
        </main>


</div>
</div>





      <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('public/fontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/fontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('public/fontend/js/bootstrap.min.js') }}"></script>

 <!-- simplebar js -->
  <script src="{{ asset('public/fontend/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('public/fontend/js/sidebar-menu.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('public/fontend/js/app-script.js') }}"></script>
  <!-- Chart js -->

  <script src="{{ asset('public/fontend/plugins/Chart.js/Chart.min.js') }}"></script>
  <!-- Vector map JavaScript -->
  <script src="{{ asset('public/fontend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('public/fontend/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- Easy Pie Chart JS -->
  <script src="{{ asset('public/fontend/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
  <!-- Sparkline JS -->
  <script src="{{ asset('public/fontend/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('public/fontend/plugins/jquery-knob/excanvas.js') }}"></script>
  <script src="{{ asset('public/fontend/plugins/jquery-knob/jquery.knob.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->
  <script src="{{ asset('public/fontend/js/index.js') }}"></script>

    <script>
    @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
          case 'info':
               toastr.info("{{ Session::get('messege') }}");
               break;
          case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
          case 'warning':
             toastr.warning("{{ Session::get('messege') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
      }
    @endif


 </script>



  <script>
     $(document).on("click", "#delete", function(e){
         e.preventDefault();
         var link = $(this).attr("href");
            swal({
              title: "Are you Want to delete?",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                   window.location.href = link;
              } else {
                swal("Safe Data!");
              }
            });
        });
</script>

</body>
</html>
