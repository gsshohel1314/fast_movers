<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - Fast Movers</title>
        
        <link rel="shortcut icon" href="images/favicon_1.ico">
        
        <!-- Base Css Files -->
        <link href="{{asset('public/content/backend')}}/css/bootstrap.min.css" rel="stylesheet" />
        
        <!-- Font Icons -->
        <link href="{{asset('public/content/backend')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{asset('public/content/backend')}}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{asset('public/content/backend')}}/css/material-design-iconic-font.min.css" rel="stylesheet">
        
        <!-- animate css -->
        <link href="{{asset('public/content/backend')}}/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{asset('public/content/backend')}}/css/waves-effect.css" rel="stylesheet">
        
        <!-- sweet alerts -->
        <link href="{{asset('public/content/backend')}}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        
        <!-- Custom Files -->
        <link href="{{asset('public/content/backend')}}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/content/backend')}}/css/style.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/content/backend')}}/css/custom.css" rel="stylesheet" type="text/css" />

        {{-- Toastr CSS --}}
        <link href="{{ asset('public/content/backend') }}/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
        
        <!--Datatable-->
        <link href="{{asset('public/content/backend')}}/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" />

        {{-- Js --}}
        <script src="{{asset('public/content/backend')}}/js/jquery.min.js"></script>
        <script src="{{asset('public/content/backend')}}/js/modernizr.min.js"></script>
        
        {{-- select2 --}}
        <link href="{{asset('public/content/backend')}}/assets/select2/select2.css" rel="stylesheet" />
    </head>
    
    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="fa fa-shopping-cart"></i> <span>Fast Movers </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('public/upload/admin') }}/{{ Auth::guard('admin')->user()->image ?? '' }}" alt="user-img" class="img-circle"> <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();" class="waves-effect">
                                                <i class="fa fa-sign-out"></i><span> Logout </span> 
                                            </a>
                                            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{{ asset('public/upload/admin') }}/{{ Auth::guard('admin')->user()->image ?? '' }}" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> {{ Auth::guard('admin')->user()->first_name ?? '' }} </a>
                            </div>
                            
                            <p class="text-muted m-0"> {{Auth::guard('admin')->user()->email ?? '' }} </p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            {{-- Admin sidebar menu --}}
                            @if(Request::is('admin*'))
                                <li>
                                    <a href="{{ url('admin/dashboard') }}" class="waves-effect {{ request()->is('admin/dashboard') ? 'active' : '' }}"><i class="md md-home"></i><span> Dashboard </span></a>
                                </li>

                                <li>
                                    <a href="{{ url('admin/user') }}" class="waves-effect {{ request()->is('admin/user*') ? 'active' : '' }}"><i class="fa fa-user-plus"></i><span> Admin </span></a>
                                </li>

                                <li class="has_sub">
                                    <a class="waves-effect {{ request()->is('admin/pickup*') ? 'active' : '' }}"><i class="md md-directions-car"></i><span> Pick-Up </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                    <li class="{{ request()->is('admin/pickup/area*') ? 'active' : '' }}"><a href="{{ url('admin/pickup/area') }}">Pick-Up Area</a></li>
                                    <li class="{{ request()->is('admin/pickup/product*') ? 'active' : '' }}"><a href="{{ url('admin/pickup/product') }}">Pick-Up Product</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ url('admin/delivery-zone') }}" class="waves-effect {{ request()->is('admin/delivery-zone*') ? 'active' : '' }}"><i class="fa fa-map-marker"></i><span> Delivery Zone </span></a>
                                </li>

                                <li>
                                    <a href="{{ url('admin/parcel-request') }}" class="waves-effect {{ request()->is('admin/parcel-request*') ? 'active' : '' }}"><i class="fa fa-cart-plus"></i><span> Parcel Request </span></a>
                                </li>

                                <li>
                                    <a href="{{ url('admin/shop') }}" class="waves-effect {{ request()->is('admin/shop*') ? 'active' : '' }}"><i class="fa fa-archive"></i><span> Shop </span></a>
                                </li>

                                <li>
                                    <a href="{{ url('admin/recycle') }}" class="waves-effect {{ request()->is('admin/recycle*') ? 'active' : '' }}"><i class="fa fa-recycle"></i><span> Recycle </span></a>
                                </li>

                                <li>
                                    <a href="{{ url('/') }}" class="waves-effect "><i class="fa fa-globe"></i><span> Visit Website </span></a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();" class="waves-effect">
                                        <i class="fa fa-power-off"></i><span> Logout </span> 
                                    </a>
                                    <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 
                    
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        @yield('content')

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2020 © Creative.
                </footer>

            </div>

        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('public/content/backend')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('public/content/backend')}}/js/waves.js"></script>
        <script src="{{asset('public/content/backend')}}/js/wow.min.js"></script>
        <script src="{{asset('public/content/backend')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{asset('public/content/backend')}}/js/jquery.scrollTo.min.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/chat/moment-2.2.1.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/fastclick/fastclick.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="{{asset('public/content/backend')}}/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="{{asset('public/content/backend')}}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="{{asset('public/content/backend')}}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('public/content/backend')}}/js/jquery.app.js"></script>

        <!-- Dashboard -->
        <script src="{{asset('public/content/backend')}}/js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="{{asset('public/content/backend')}}/js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="{{asset('public/content/backend')}}/js/jquery.todo.js"></script>

        <!-- Custom JS -->
        <script src="{{asset('public/content/backend')}}/js/custom.js"></script>

        <!--toastr-->
        <script src="{{ asset('public/content/backend') }}/toastr/toastr.min.js"></script>

        <!-- Toastr without composer code start -->
        @if (Session::has('success'))
            <script>
                toastr.success("{{ Session::get('success') }}", "success", {
                    positionClass: "toast-top-right",
                    closeButton: true,
                    progressBar: true,
                    timeOut: "3000",
                });

            </script>
        @endif
        @if (Session::has('info'))
            <script>
                toastr.info("{{ Session::get('info') }}");

            </script>
        @endif
        @if (Session::has('warning'))
            <script>
                toastr.warning("{{ Session::get('warning') }}");

            </script>
        @endif
        @if (Session::has('error'))
            <script>
                toastr.error("{{ Session::get('error') }}", "error", {
                    positionClass: "toast-top-right",
                    closeButton: true,
                    progressBar: true,
                    timeOut: "3000",
                });

            </script>
        @endif

        <!-- Toastr globaly error show code -->
        <script>
            @if($errors->any())
            @foreach($errors->all() as $error)
                toastr.error('{{ $error }}','Error',{
                    closeButton: true,
                    progressBar: true,
                });
            @endforeach
            @endif
        </script>
        <!-- Toastr globaly error show code end -->
        <!-- Toastr without composer code end -->

        <!--Datatable-->
        <script src="{{asset('public/content/backend')}}/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="{{asset('public/content/backend')}}/assets/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              $('#datatable').dataTable( {
                "ordering": false
              } );
            } );
        </script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        {{-- select2 --}}
        <script src="{{asset('public/content/backend')}}/assets/select2/select2.min.js"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery(".select2").select2({
                    width: '100%',
                });
            });
        </script>
    </body>
</html>