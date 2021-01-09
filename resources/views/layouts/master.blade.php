<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ESIMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="./img/IPDB_Logo.png" alt="IPDB Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name', 'ESIMS') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
            <!-- User profile and logout section-->
            <li class="nav-item">
                <div class="image">
                    <img src='./img/profile/{{ Auth::user()->photo }}' class="img-circle elevation-2" alt="User Image" style="max-width:100%;max-height:100%;">
                </div>
            </li>
            <li class="nav-item dropdown my-3">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-blue font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <router-link to="/profile">
                        <a href="#" class="dropdown-item text-blue ">{{ __('Profile') }}</a>
                    </router-link>
                    
                    <a class="dropdown-item text-blue" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                    </form>
                </div>
            </li>
            <!-- User profile and logout section-->
            <!-- Home section-->
            <li class="nav-item">
              <a href="#" class="nav-link  active">
                <router-link to="/dashboard" >
                  <i class="fas fa-house-user"></i>
                  <p>
                    {{ __('Home') }}
                  </p>
                </router-link>
              </a>
            </li>
            <!-- Home section-->
            <!-- Student module section-->
            <li class="nav-item menu-close">
              <a href="#" class="nav-link">
                  <i class="fas fa-user-graduate"></i>
                  <p>
                      {{ __('Student') }}
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <router-link to="/dashboard" >
                      <i class="fas fa-id-badge"></i>
                      <p>{{ __('Registration') }}</p>
                    </router-link>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Student module section-->
            <!-- User module section-->
            <li class="nav-item menu-close">
              <a href="#" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>
                      {{ __('Users') }}
                      
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <router-link to="/dashboard" >
                      <i class="fas fa-list-alt"></i>
                      <p>{{ __('User List') }}</p>
                    </router-link>
                  </a>
                </li>
              </ul>
            </li>
            <!-- User module section-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <router-view></router-view>
    <vue-progress-bar></vue-progress-bar>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      SKH
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Hela.lk</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
</body>
</html>
