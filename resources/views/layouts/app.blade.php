<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TheSkillsShop') }}</title>
    
    <!-- Icon that shows in the browser tab when website is launched -->
    <link rel="shortcut icon" href=" {{ ('images/skill_set.jpg') }} ">
    <meta name="referrer" content="no-referrer">
    <meta name="description" content="Your one stop shop for quality service delivery">
    <meta name="keywords" content="theskillsshop, skillsshop, skills, skillsperson, skillspersons, skills-shop, theskills-shop, workmen, labourers, blue-collar workers, home decoration">
    <meta property="og:description" content="TheSkillsShop, Skillsshop, Skills, Skillsperson, Skillspersons, Skills-shop, Skillsshop, Theskills-shop, theskills-shop.com, workmen, labourers, blue-collar workers, home decoration" xmlns:og="http://opengraphprotocol.org/schema/">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/extra.js') }}" defer></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Script handler for JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js" integrity="sha512-aDciVjp+txtxTJWsp8aRwttA0vR2sJMk/73ZT7ExuEHv7I5E6iyyobpFOlEFkq59mWW8ToYGuVZFnwhwIUisKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Bootstrap Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap script that controls dropdown boxes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js" integrity="sha512-pax4MlgXjHEPfCwcJLQhigY7+N8rt6bVvWLFyUMuxShv170X53TRzGPmPkZmGBhk+jikR8WBM4yl7A9WMHHqvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for projects counter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for waypoints -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container-fluid noPadding" id="app">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                 @if(Session::has('newsletter-signUp-successfull'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-check"></i>{{Session::get('newsletter-signUp-successfull')}}
                </div>

                @elseif(Session::has('newsletter-signUp-failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('newsletter-signUp-failed')}}
                </div>
               
                @elseif(Session::has('messages-message-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-check"></i>{{Session::get('messages-message-success')}}
                </div>
                                            
                @elseif(Session::has('messages-message-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('messages-message-error')}}
                </div>

                @elseif(Session::has('customers-booking-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('customers-booking-success')}}
                </div>

                @elseif(Session::has('customers-booking-error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('customers-booking-error')}}
                </div>

                @elseif(Session::has('customers-rating-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('customers-rating-success')}}
                </div>

                @elseif(Session::has('customers-rating-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('customers-rating-error')}}
                </div>

                @elseif(Session::has('skills-person-registration-successful'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('skills-person-registration-successful')}}
                </div>

                @elseif(Session::has('skills-person-registration-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('skills-person-registration-error')}}
                </div>

                @elseif(Session::has('skills-person-rating-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('skills-person-rating-success')}}
                </div>

                @elseif(Session::has('skillsperson-rating-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <i class="fa-solid fa-circle-xmark"></i>{{Session::get('skillsperson-rating-error')}}
                </div>
                @endif
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm" id="main_nav_bar">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <b>{{ config('app.name', 'TheSkillsShop') }}</b></a>
                    <button class="navbar-toggler navbarTogglerColor" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto text-white">
                            @if (Auth::check())
                            <li class="nav-item">
                                <a class="nav-link text-white"  id="link_nav" href=" {{ route('dashboard') }} "><b>{{ __('DASHBOARD') }}</b></a>
                            </li>
                            @endif

                            <li class="nav-item">
                                <a class="nav-link text-white"  id="link_nav" href=" {{ route('index_main') }}#about-us "><b>{{ __('ABOUT US') }}</b></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white"  id="link_nav" href=" {{ route('index_main') }}#services "><b>{{ __('SERVICES') }}</b></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white"  id="link_nav" href=" {{ route('index_main') }}#operations "><b>{{ __('OPERATIONS') }}</b></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white"  id="link_nav" href=" {{ route('index_main') }}#testimonials "><b>{{ __('TESTIMONIALS') }}</b></a>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest

                            <!--
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            -->

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><b>{{ Auth::user()->name }}</b></a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><b>{{ __('Logout') }}</b></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="container-fluid">
                <div class="row noPadding">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        @yield('content')
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div id="sy-whatshelp">
                            <div class="sywh-services">
                                <a href="" class="newsletter" data-tooltip="Newsletter Sign Up" data-placement="left" target="_blank" data-bs-toggle="modal" data-bs-target="#newsletterModal">
                                    <i class="fa-solid fa-envelopes-bulk"></i>
                                </a>

                                <a href="" class="sendMessage" data-tooltip="Send Message" data-placement="left" target="_blank" data-bs-toggle="modal" data-bs-target="#messageUsModal">
                                    <i class="fa-solid fa-comment"></i>
                                </a>

                                <a href="https://www.facebook.com/The-Skills-Shop-101303204582655/" class="messenger" data-tooltip="Messenger" data-placement="left" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>

                                <a href="https://api.whatsapp.com/send?phone=18765409333" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>

                                <a href="tel:+18765409333" class="call" data-tooltip="Call" data-placement="left">
                                    <i class="fa-solid fa-phone"></i>
                                </a>

                                <a href="mailto:skillsshop2019@gmail.com" class="mailAddress" data-tooltip="Email" data-placement="left" target="_blank">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                            </div>

                            <a class="sywh-open-services" data-tooltip="Contact Us" data-placement="left">
                                <i class="fa fa-comments"></i>
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="container-fluid bg-dark text-light text-center pt-3 pb-3">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
                        <h2><u>Get in touch</u></h2>
                        <a href="tel:+18765409333" class="text-white" id="footer-text-styler"><i class="fas fa-phone p-3" aria-hidden="true"></i>Call @ +18765409333</a><br>
                        <a href="mailto:skillsshop2019@gmail.com" class="text-white" id="footer-text-styler" target="_blank"><i class="fa fa-envelope p-3" aria-hidden="true"></i>Mail @ TheSkillsShop</a><br>
                        <a href="https://www.facebook.com/The-Skills-Shop-101303204582655/" class="text-white" id="footer-text-styler" target="_blank"><i class="fa fa-facebook-official p-3" aria-hidden="true"></i>Facebook @ TheSkillsShop</a>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
                        <h2><u>Quick Links</u></h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href=" {{ route('index_main') }}#about-us " class="card-text text-light"><i class="fa fa-chevron-right p-3" aria-hidden="true"></i>AboutUs</a>
                            </li>

                            <li>
                                <a href=" {{ route('index_main') }}#services " class="card-text text-light"><i class="fa fa-chevron-right p-3" aria-hidden="true"></i>Services</a>
                            </li>

                            <li>
                                <a href=" {{ route('index_main') }}#operations " class="card-text text-light"><i class="fa fa-chevron-right p-3" aria-hidden="true"></i>Operations</a>
                            </li>

                            <li>
                                <a href=" {{ route('index_main') }}#contactUs " class="card-text text-light"><i class="fa fa-chevron-right p-3" aria-hidden="true"></i>Contacts</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 p-1">
                        <h2><u>The Skills Shop</u></h2>
                        <small class="text-light">Developed and Maintained by <a class="" href="#">ArgoneTech</a></small><br>
                        <small class="text-light">All Rights Reserved.</small>
                        <small class="d-block text-light">© 2021</small>
                    </div>
                </div>
            </footer>
    </div>

<script>
    window.addEventListener('load', slidesButtonsController);
    window.addEventListener('load', numbersCounter);
    window.addEventListener('load', contactUsIcons);

    // Homepage slides buttons controller
    function slidesButtonsController() {
        jQuery(document).bind('keyup', function(e) {
            if(e.keyCode==39) {
                jQuery('a.carousel-control.right').trigger('click');
            } else if (e.keyCode==37) {
                jQuery('a.carousel-control.left').trigger('click');
            }
        });
    }

    // Start Of Counter Up Script
     function numbersCounter() {
        $(".counter").counterUp({
            delay: 10,
            time: 1200,
        });
     }

    // Start of function that shows or hides the contact us icons
    function contactUsIcons() {
        $('a.sywh-open-services').click(function () {
            if ($('.sywh-services').hasClass('active')) {
                $('.sywh-services').removeClass('active');
                $('a.sywh-open-services i.fa-times').hide();
                $('a.sywh-open-services i.fa-comments').show();
                $('a.sywh-open-services').removeClass('data-tooltip-hide');
                $('.sywh-services a:nth-child(1)').delay(0).fadeOut();
                $('.sywh-services a:nth-child(2)').delay(100).fadeOut();
                $('.sywh-services a:nth-child(3)').delay(200).fadeOut();
                $('.sywh-services a:nth-child(4)').delay(300).fadeOut();
                $('.sywh-services a:nth-child(5)').delay(400).fadeOut();
            } else {
                $('.sywh-services').addClass('active');
                $('a.sywh-open-services i.fa-comments').hide();
                $('a.sywh-open-services i.fa-times').show();
                $('a.sywh-open-services').addClass('data-tooltip-hide');
                $('.sywh-services a:nth-child(5)').delay(0).fadeIn();
                $('.sywh-services a:nth-child(4)').delay(100).fadeIn();
                $('.sywh-services a:nth-child(3)').delay(200).fadeIn();
                $('.sywh-services a:nth-child(2)').delay(300).fadeIn();
                $('.sywh-services a:nth-child(1)').delay(400).fadeIn();
            }
        });
    }

    //Start of register Toggle handler
    var state = false; 
    function toggle_register() {
        if (state) {
            document.getElementById("input_adminPassword").setAttribute("type", "password");
            document.getElementById("input_adminPasswordConfirm").setAttribute("type", "password");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye-slash';
            state = false;
        } else {
            document.getElementById("input_adminPassword").setAttribute("type", "text");
            document.getElementById("input_adminPasswordConfirm").setAttribute("type", "text");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye';
            state = true;
        }
    }

    //Start of login Toggle handler
    function toggle_login() {
        if (state) {
            document.getElementById("input_adminPassword").setAttribute("type", "password");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye-slash';
            state = false;
        } else {
            document.getElementById("input_adminPassword").setAttribute("type", "text");
            document.querySelector("#togglePassword").classList = 'fa-solid fa-eye';
            state = true;
        }
    }



</script>

</body>
</html>
