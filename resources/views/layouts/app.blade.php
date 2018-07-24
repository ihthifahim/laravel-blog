<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ihthi Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
           


            <nav class="navbar has-shadow" >
                    <div class="container">
                      <div class="navbar-brand">
                        <a class="navbar-item is-paddingless brand-item" href="{{route('home')}}">
                          <img src="{{asset('images/logo.png')}}" alt="DevMarketer logo">
                        </a>
                  
                        @if (Request::segment(1) == "manage")
                          <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                            <span class="icon">
                              <i class="fa fa-arrow-circle-right"></i>
                            </span>
                          </a>
                        @endif
                  
                        <button class="button navbar-burger">
                         <span></span>
                         <span></span>
                         <span></span>
                       </button>
                      </div>
                      <div class="navbar-menu">
                        <div class="navbar-start">
                          <a class="navbar-item is-tab is-active m-l-20">Learn</a>
                          <a class="navbar-item is-tab">Discuss</a>
                          <a class="navbar-item is-tab">Share</a>
                        </div> <!-- end of .navbar-start -->
                  
                  
                        <div class="navbar-end nav-menu" style="overflow: visible">
                          @if(Auth::guest())
                            <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                            <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                          @else
                            <div class="navbar-item has-dropdown is-hoverable">
                              <a class="navbar-link">Hey Ihthi</a>
                              <div class="navbar-dropdown is-right" >
                                <a href="#" class="navbar-item">
                                  <span class="icon">
                                    <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                                  </span>Profile
                                </a>
                  
                                <a href="#" class="navbar-item">
                                  <span class="icon">
                                    <i class="fa fa-fw fa-bell m-r-5"></i>
                                  </span>Notifications
                                </a>
                                <a href="#" class="navbar-item">
                                  <span class="icon">
                                    <i class="fa fa-fw fa-cog m-r-5"></i>
                                  </span>Manage
                                </a>
                                <hr class="navbar-divider">
                                <a href="#" class="navbar-item">
                                  <span class="icon">
                                    <i class="fa fa-fw fa-sign-out m-r-5"></i>
                                  </span>
                                  Logout
                                </a>
                                
                              </div>
                            </div>
                          @endif
                        </div>
                      </div>
                  
                    </div>
                  </nav>


                  @yield('content');


                  
     
    </div>
</body>
</html>
