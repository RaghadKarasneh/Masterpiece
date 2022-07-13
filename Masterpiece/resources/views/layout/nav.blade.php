{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"></script>
      <!--FontAwesome script-->
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title','')</title>
</head>
<body>
    <header>
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img class="navbar-brand" src="/images/logo.png" height="150px" width="150px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
</header> --}}
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Agency Perfect</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/@yield('css','')">
      <!-- Fontawesom
    ================================================== -->
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <title>@yield('title','')</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container-fluied">

                <div class="navbar-header">
                   
                    <a class="site-title">
                      <img src="/img/logo.png" height="120px" width="120px">
                    </a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="./" data-toggle="">Home</a></li> 
                        {{-- data-toggle="dropdown" --}}
                        {{--  class="active" --}}
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Catagories<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>

                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li><a href="./jobs">Jobs</a></li>
                              <li><a href="./blog">Blogs</a></li>
                              <li><a href="./centers&clinics">Centers & Clinics</a></li>
                              <li><a href="./experiences">Parents' Experiences</a>
                                <ul class="dropdown-menu dropdown-menu-experiences" role="menu" aria-labelledby="menu1">
                                  <li><a href="./experiences">Down Syndrom</a></li>
                                  <li><a href="./experiences">Autism</a></li>
                                  <li><a href="./experiences">Centers & Clincs</a></li>
                                </ul></li>
                              <li><a href="./motivation">Motivation</a></li>
                            </ul>

                        </li>
                        <li><a href="./shop">Shop
                          {{-- <i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i> --}}
                        </a>

                          {{-- <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li><a href="./jobs">Foods & Drinks</a></li>
                            <li><a href="./blog">Medical Equipments</a></li>
                          </ul> --}}
                        </li>
                        {{-- <li><a href="./blog">Blog</a></li> --}}
                        <li><a href="./contact">Contact</a></li>
                      
                            

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            
                            @if (Route::has('login'))
                            @auth
                            <div class=" fixed top-0 px-6 py-4 sm:block ">
                                {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                                <a href="{{ url('/profile') }}" class="dropdown-item nav-item nav-link"><i class="fa-solid fa-user text-primary mx-3 " style="font-size: 28px"></i></a>
                                {{-- </div> --}}
                            </div>
                            @else
                                {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}
                            <div class=" fixed top-0 right-0 px-6 py-4 sm:block">
                                <a href="{{ route('login') }}" class="btn btn-primary pt-4 px-lg-5 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                
                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif --}}
                            @endauth
                            @endif
                       
                        {{-- <li><a href="ui-elements.html">UI Elements</a></li> --}}

                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->
