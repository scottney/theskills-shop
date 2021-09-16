<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>TheSkillsShop | Dashboard</title>

  <meta name="csrf-token" content="{{ csrf_token() }}" />
  
  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE -->
  <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    
  <!-- OPTIONAL SCRIPTS -->
  <script src="{{ asset('dist/js/demo.js') }}"></script>
  <script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>

  <!-- Script to handle calendar events -->
  <script src=" {{ asset('dist/css/fullcalendar/lib/main.js') }} "></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/af.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>-->
  <!-- JQuery Script Handler -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- JQuery UI JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css"> -->
   <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Full calendar CSS -->
  <link href=" {{ asset('dist/css/fullcalendar/lib/main.css') }}" rel='stylesheet' />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/extra.css') }}" rel="stylesheet" type="text/css">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href=" {{ route('dashboard') }} " class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Facebook Messages</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=" # " class="brand-link">
      <img src="{{ ('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">THESKILLSSHOP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header"><h5>PERSONNEL</h5></li>
          <li class="nav-item">
            <h6 style="text-align: center; color: white;">Customers</h6>
            <a href=" {{ route('customers_booking_records') }} " class="nav-link" target="blank">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Customer Bookings
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href=" {{ route('customers_rating_records') }} " class="nav-link" target="blank">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customers Ratings
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <h6 style="text-align: center; color: white;">Skills Persons</h6>
            <a href=" {{ route('skills_person_registration_records') }} " class="nav-link" target="blank">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Skills Person Registration
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href=" {{ route('skills_person_rating_records') }} " class="nav-link" target="blank">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Skills Person Ratings
              </p>
            </a>
          </li>
          
          <li class="nav-header">CONTENT</li>
          <!--<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">Appointmnents</span>
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href=" # " class="nav-link" target="blank">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href=" {{ route('messages') }} " class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href=" {{ route('news_letter') }} " class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                News Letter Subscriptions
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href=" {{ route('calendar') }} " class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Documents
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" # " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Police Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=" # " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Letters of Recommendation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MAIN SITE LINKS</li>
          <li class="nav-item">
            <a href=" {{ route('index_main') }} " class="nav-link">
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{ route('blog') }} " class="nav-link">
              <p>
                Blog
              </p>
            </a>
          </li>
          <li class="nav-header">OPERATIONS</li>
          <li class="nav-item">
            
              <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="nav-icon far fa-circle text-info"></i>
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- ./Body -->

<main class="py-4">
  @yield('content')

  @include('sweetalert::alert')
</main>

<!-- ./Body -->

<!-- Scripts -->
@stack('scripts')

</body>
</html>
