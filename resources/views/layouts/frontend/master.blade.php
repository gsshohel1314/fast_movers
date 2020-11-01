<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>..:: FAST MOVERS ::..</title>
    <link rel="stylesheet" href="{{asset('public/content/frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/content/frontend')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('public/content/frontend')}}/css/venobox.min.css">
    <link rel="stylesheet" href="{{asset('public/content/frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/content/frontend')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('public/content/frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/content/frontend')}}/css/responisive.css">

    {{-- Toastr CSS --}}
    <link href="{{ asset('public/content/frontend') }}/toastr/toastr.min.css" rel="stylesheet" type="text/css" />

    {{-- Sweet Alert JS --}}
    <script src="{{asset('public/content/frontend')}}/sweet-alert/sweetalert.min.js"></script>

    {{-- select2 --}}
    <link href="{{asset('public/content/frontend')}}/select2/select2.css" rel="stylesheet" />

    <script src="{{asset('public/content/frontend')}}/js/jquery-2.1.3.min.js"></script>
    <script src="{{asset('public/content/frontend')}}/js/modernizr-2.8.3.min.js"></script>

    <style>
        .header_loging_sing ul li a {
            padding: 10px 15px;
            margin-top: 10px;
        }
    </style>
    
</head>

<body>

    <!-- header start -->
    <header class="main_header_part" id="main_header_sec">
        <div class="container">
            @guest
                <div class="row">
                    <div class="col-12 col-md-3 col-sm-3">
                        <div class="header_logo">
                            <a href="#">
                                <img src="{{asset('public/content/frontend')}}/images/logo.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-9 col-sm-9">
                        <div class="header_loging_sing">
                            <ul class="float-right">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">SIGNUP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12 col-md-4 col-sm-4 col-lg-3">
                        <div class="header_logo">
                            <a href="#">
                                <img src="{{asset('public/content/frontend')}}/images/logo.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    @if (Request::segment(1) != 'shop')
                    <div class="col-12 col-md-8 col-sm-8 col-lg-4" style="margin-left: -80px;">
                        <div class="header_menu">
                            <ul>
                                <li><a href="#">DASHBOARD</a></li>
                                <li><a href="{{url('parcel')}}">PARCELS</a></li>
                                <li><a href="#">PAYMENTS</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-6 col-lg-3" style="margin-left: -120px;">
                        <div class="header_loging_sing">
                            <ul class="float-right">
                                <li><a href="{{url('parcel')}}" style="font-size: 15px;">Create Parcel</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-sm-6 col-lg-2">
                        <div class="header_loging_sing_form">
                            <form>
                                <select id="inputState" class="form-control">
                                    <option selected>Shop Name</option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                    <option>Shop Name </option>
                                </select>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6 col-sm-6 col-lg-2">
                        <ul class="float-left" style="padding-top: 15px;">
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"> {{ Auth::User()->first_name ?? '' }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        @if (Auth::User()== true)
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @endif
                </div>
            @endguest
        </div>
    </header>
    <!-- header end -->

    @yield('content')

    <!-- footer start -->
    <footer>
        <section class="main_footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ft_content">
                            <h4>গুরুত্বপূর্ণ লিংক</h4>
                            <p><a href="#">প্রাইভেসি পলিসি</a></p>
                            <p><a href="#">কভারেজ এরিয়াি</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ft_content">
                            <h4>যোগাযোগ করুন</h4>
                            <p><a href="#">09610001234</a></p>
                            <p><a href="#">contact@fastmovers.com.bd</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ft_content">
                            <h4>আমাদের ঠিকানা</h4>
                            <p>৫২৭, মতিঝিল বাণিজ্যিক এলাকা<br>
                            ঢাকা -১২০৮, বাংলাদেশ</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="ft_content">
                            <h4>আমাদের ঠিকানা</h4>
                            <a href="#"><img src="{{asset('public/content/frontend')}}/images/ft_app1.png" alt="" class="img-fluid"></a>
                            <a href="#"><img src="{{asset('public/content/frontend')}}/images/ft_app2.png" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copy_right">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="copy_right_content text-center">
                          <p>Copyright © 2020 | All rights reserved by Fast Movers | Development By <a href="https://creativesystemltd.com" style="font-size: 16px;">Creative System Limited.</a></p>
                      </div>
                  </div>
              </div>
          </div>  
        </section>
    </footer>
    <!-- footer end -->

    <script src="{{asset('public/content/frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/content/frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/content/frontend')}}/js/waypoints.min.js"></script>
    <script src="{{asset('public/content/frontend')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('public/content/frontend')}}/js/venobox.min.js"></script>
    <script src="{{asset('public/content/frontend')}}/js/custom.js"></script>

    <!--toastr-->
    <script src="{{ asset('public/content/frontend') }}/toastr/toastr.min.js"></script>

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

    {{-- select2 --}}
    <script src="{{asset('public/content/frontend')}}/select2/select2.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".select2").select2({
                width: '100%',
            });
        });
    </script>
</body>

</html>