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
    <meta name="description" content="Your one stop shop for quick service delivery. Plumbing, carpentry, cabinet making, masonry, gardening, landscaping, electrical work, Painting,food delivery, general delivery and just about anything else.">
    <meta name="keywords" content="TheSkillsShop, Skillsshop, Skills, Skillsperson, Skillspersons, Skills-shop, Skillsshop, Theskills-shop, theskills-shop.com, workmen, labourers, blue-collar workers, home decoration">
    <meta property="og:description" content="TheSkillsShop, Skillsshop, Skills, Skillsperson, Skillspersons, Skills-shop, Skillsshop, Theskills-shop, theskills-shop.com, workmen, labourers, blue-collar workers, home decoration" xmlns:og="http://opengraphprotocol.org/schema/">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/extra.js') }}" defer></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Js script -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- JQuery script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Popper script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Lists Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.js" integrity="sha512-bvQAGUdz84PpeKWrShm1eEp20Fkcv7PJespsVWVtkTB74C8rNmg75Hru8w1AXnfiNHXnT/XF2jqZskyU3bIaMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for projects counter -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script handler for Sweetalert notifications -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Buttons controller for the main slides -->
    <script type="text/javascript">
        jQuery(document).bind('keyup', function(e) {
            if(e.keyCode==39) {
                jQuery('a.carousel-control.right').trigger('click');
            } else if (e.keyCode==37) {
                jQuery('a.carousel-control.left').trigger('click');
            }
        });
    </script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    -->
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div class="container-fluid" style="padding-right: 0px; padding-left: 0px; font-family: serif, sans-serif;">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm" id="main_nav_bar">
                        <div class="container">
                            <a class="navbar-brand text-white" href="{{ url('/') }}">
                                <b>{{ config('app.name', 'TheSkillsShop') }}</b></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"  style="background-color: #ffffff;">
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
                                            <a class="nav-link text-white"  id="link_nav" href=" {{ route('blog') }} "><b>{{ __('BLOG') }}</b></a>
                                        </li>

                                         <li class="nav-item">
                                            <a class="nav-link text-white"  id="link_nav" href=" {{ route('index_main') }}#testimonials "><b>{{ __('TESTIMONIALS') }}</b></a>
                                        </li>

                                         <li class="nav-item">
                                            <a class="nav-link text-white"  id="link_nav" href=" {{ route('contacts') }} "><b>{{ __('CONTACTS') }}</b></a>
                                        </li>

                                    </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest

                                        @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @endif

                                        <!--
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        @endif
                                        -->
                                        @else

                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <b>{{ Auth::user()->name }}</b></a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <b>{{ __('Logout') }}</b></a>

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
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding-left: 0px; padding-right: 0px; font-size: 14px;">
                    <main>
                        @yield('content')

                        @include('sweetalert::alert')
                    </main>
                </div>
            </div>
        </div>

        <!------- Start Of Footer Section ------->
        @include('layouts.footer')
        <!------- End Of Footer Section ------->

    </div>

    <!-- Scripts -->
    @stack('scripts')

    <script type="text/javascript">
        const options = {
            valueNames: ['id', 'customers_service_number', 'skills_person_service_number', 'rate', 'created_at', 'updated_at'].
            item: ['customers_rating_items','skills_person_rating_items',]
            page: 5,
            pagination: true;
        }

        new List(['customers_rating_list', 'skills_person_rating_list'], options, data);
    
    </script>

</body>
</html>
