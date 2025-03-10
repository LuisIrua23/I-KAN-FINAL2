<!DOCTYPE html>
<html lang="en">

<head>
    @section('cont')
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Administrador</title>
        <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
        <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">

        <!-- Fonts and icons -->
        <script src="{{ asset('atlantis/assets/js/plugin/webfont/webfont.min.js') }}"></script>
        <script>
            WebFont.load({
                google: {
                    "families": ["Lato:300,400,700,900"]
                },
                custom: {
                    "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                        "simple-line-icons"
                    ],
                    urls: ['{{ asset('atlantis/assets/css/fonts.min.css') }}']
                },
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('atlantis/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('atlantis/assets/css/atlantis.min.css') }}">

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('atlantis/assets/css/demo.css') }}">
    </head>

    <body>
        <div class="wrapper">
            <div class="main-header">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="blue">

                    <a href="{{ route('home.home') }}" class="logo">
                        <img src=" {{ asset('img/IMG HOME/IMG HEADER - SUBMENU HEADER/LOGOS/blanco.png') }}"
                            style="height: 100%" alt="navbar brand" class="navbar-brand">
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                    </div>
                </div>
                <!-- End Logo Header -->

                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                    <div class="container-fluid">
                        <div class="collapse" id="search-nav">
                            <form class="navbar-left navbar-form nav-search mr-md-3">
                                
                            </form>
                        </div>
                        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                            <li class="nav-item dropdown hidden-caret">


                            </li>
                            <li class="nav-item dropdown hidden-caret">

                                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">


                                    <li>
                                        <a class="see-all" href="javascript:void(0);">See all notifications<i
                                                class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown hidden-caret">

                                <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">

                                </div>
                            </li>
                            <li class="nav-item dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="{{ asset('atlantis/assets/img/perfil.jpg') }}" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg"><img
                                                        src="{{ asset('atlantis/assets/img/perfil.jpg') }}"
                                                        alt="image profile" class="avatar-img rounded">
                                                    </div>
                                                <div class="u-text">
                                                    <h4>{{ Auth::user()->name }}</h4>
                                                    <p class="text-muted">{{ Auth::user()->email }}</p><a
                                                        href="{{ route('profile.home') }}"
                                                        class="btn btn-xs btn-secondary btn-sm">ver perfil</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">My Profile</a>
                                            <a class="dropdown-item" href="#">My Balance</a>
                                            <a class="dropdown-item" href="#">Inbox</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Account Setting</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                Cerrar sesión
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">@csrf</form>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <!-- Sidebar -->
            <div class="sidebar sidebar-style-2">
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <div class="user">
                            <div class="avatar-sm float-left mr-2">
                                <img src="{{ asset('atlantis/assets/img/perfil.jpg') }}" alt="..."
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="info">
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                    <span>
                                        {{ Auth::user()->name }}
                                        <span class="user-level">Administrador</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <div class="clearfix"></div>

                                <div class="collapse in" id="collapseExample">
                                    <ul class="nav">
                                        <li>
                                            <a href="{{ route('profile.home') }}">
                                                <span class="link-collapse">Perfil</span>
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a href="#edit">
                                                <span class="link-collapse">Edit Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#settings">
                                                <span class="link-collapse">Settings</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-primary">
                            <li class="nav-item active">
                                {{-- <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                    <span class="caret"></span>
                                </a> --}}
                                {{-- <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{asset('atlantis/demo1/index.html')}}">
                                            <span class="sub-item">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{asset('atlantis/demo2/index.html')}}">
                                            <span class="sub-item">Dashboard 2</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Componentes</h4>
                            </li>

                            {{--                             

                            <li class="nav-item {{ request()->routeIs('usuarios.*') ? 'active' : '' }}">
                                <a data-toggle="collapse" href="#usuarios">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Usuarios</p>
                                    <span class="caret"></span>
                                </a>

                                <div class="collapse {{ request()->routeIs('usuarios.*') ? 'show' : '' }}"
                                    id="usuarios">
                                    <ul class="nav nav-collapse">
                                        <li class="{{ request()->routeIs(['usuarios.create', 'usuarios.store']) ? 'active' : ''}}">
                                            <a href="{{ route('usuarios.create') }}">
                                                <span class="sub-item">Registrar usuario</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
 --}}




                            <li class="nav-item {{ request()->routeIs('post.*') ? 'active' : '' }}">
                                <a data-toggle="collapse" href="#post">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Posters</p>
                                    <span class="caret"></span>
                                </a>

                                <div class="collapse {{ request()->routeIs('post.*') ? 'show' : '' }}" id="post">
                                    <ul class="nav nav-collapse">
                                        <li class="{{ request()->routeIs(['post.listardos']) ? 'active' : '' }}">
                                            <a href="{{ route('post.listardos') }}">
                                                <span class="sub-item">Lista</span>
                                            </a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs(['post.create', 'post.store']) ? 'active' : '' }}">
                                            <a href="{{ route('post.create') }}">
                                                <span class="sub-item">Crear post</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('post.listar') }}">
                                                <span class="sub-item">Ir a sitio web</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('home.home') }}">
                                                <span class="sub-item">Ir a home</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item {{ request()->routeIs('slider.*') ? 'active' : '' }}">
                                <a data-toggle="collapse" href="#slider">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Foto sliders</p>
                                    <span class="caret"></span>
                                </a>

                                <div class="collapse {{ request()->routeIs('slider.*') ? 'show' : '' }}" id="slider">
                                    <ul class="nav nav-collapse">
                                        <li class="{{ request()->routeIs(['slider.listar']) ? 'active' : '' }}">
                                            <a href="{{ route('slider.listar') }}">
                                                <span class="sub-item">Lista y cambiar</span>
                                            </a>
                                        </li>
                                        <li
                                            class="{{ request()->routeIs(['listar.create', 'listar.store']) ? 'active' : '' }}">
                                            <a href="{{ route('slider.create') }}">
                                                <span class="sub-item">Crear </span>
                                            </a>
                                        </li>
                                        <li
                                           >
                                            <a href="{{ route('home.home') }}">
                                                <span class="sub-item">Ir a home </span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item {{ request()->routeIs('unit.*') ? 'active' : '' }}">
                                <a data-toggle="collapse" href="#unit">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Tiendas aliadas</p>
                                    <span class="caret"></span>
                                </a>

                                <div class="collapse {{ request()->routeIs('unit.*') ? 'show' : '' }}" id="unit">
                                    <ul class="nav nav-collapse">
                                        <li class="{{ request()->routeIs(['unit.listardos']) ? 'active' : '' }}">
                                            <a href="{{ route('unit.listardos') }}">
                                                <span class="sub-item">Lista </span>
                                            </a>
                                        </li>

                                        <li
                                            class="{{ request()->routeIs(['unit.create', 'unit.store']) ? 'active' : '' }}">
                                            <a href="{{ route('unit.create') }}">
                                                <span class="sub-item">Crear </span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->routeIs(['unit.listar']) ? 'active' : '' }}">
                                            <a href="{{ route('unit.listar') }}">
                                                <span class="sub-item">Lista en web</span>
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </li>



                            {{-- 
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#tables">
                                <i class="fas fa-table"></i>
                                <p>Tables</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="tables/tables.html">
                                            <span class="sub-item">Basic Table</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tables/datatables.html">
                                            <span class="sub-item">Datatables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#maps">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Maps</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="maps/jqvmap.html">
                                            <span class="sub-item">JQVMap</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#charts">
                                <i class="far fa-chart-bar"></i>
                                <p>Charts</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="charts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="charts/charts.html">
                                            <span class="sub-item">Chart Js</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="charts/sparkline.html">
                                            <span class="sub-item">Sparkline</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="widgets.html">
                                <i class="fas fa-desktop"></i>
                                <p>Widgets</p>
                                <span class="badge badge-success">4</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#submenu">
                                <i class="fas fa-bars"></i>
                                <p>Menu Levels</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="submenu">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a data-toggle="collapse" href="#subnav1">
                                            <span class="sub-item">Level 1</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav1">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#subnav2">
                                            <span class="sub-item">Level 1</span>
                                            <span class="caret"></span>
                                        </a>
                                        <div class="collapse" id="subnav2">
                                            <ul class="nav nav-collapse subnav">
                                                <li>
                                                    <a href="#">
                                                        <span class="sub-item">Level 2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Level 1</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <div class="main-panel">
                <div style="margin-top: 5%;background: rgb(235, 235, 235); ">



                    {{-- @include('sweetalert::alert') --}}
                    @yield('content')
                    {{-- @extends('post.listardos')  --}}

                    {{-- <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Dashboard</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Pages</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Starter Page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="page-category">Inner page content goes here</div>
                </div> --}}
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul class="nav">
                                {{-- <li class="nav-item">
                                <a class="nav-link" href="https://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul> --}}
                        </nav>
                        <div class="copyright ml-auto">
                            {{ now()->day }}, {{ now()->year }}, made with <i
                                class="fa fa-heart heart text-danger"></i> by <a href="#">Jack Steven</a>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js') }}"></script>
        <script src="{{ asset('atlantis/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js') }}"></script>

        <!-- jQuery UI -->
        <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

        <!-- jQuery Scrollbar -->
        <script src="{{ asset('atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


        <!-- Chart JS -->
        <script src="{{ asset('atlantis/assets/js/plugin/chart.js/chart.min.js') }}"></script>

        <!-- jQuery Sparkline -->
        <script src="{{ asset('atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Chart Circle -->
        <script src="{{ asset('atlantis/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

        <!-- Datatables -->
        <script src="{{ asset('atlantis/assets/js/plugin/datatables/datatables.min.js') }}"></script>

        <!-- Bootstrap Notify -->
        <script src="{{ asset('atlantis/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

        <!-- jQuery Vector Maps -->
        <script src="{{ asset('atlantis/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('atlantis/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

        <!-- Sweet Alert -->
        <script src="{{ asset('atlantis/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

        <!-- Atlantis JS -->
        <script src="{{ asset('atlantis/assets/js/atlantis.min.js') }}"></script>
    </body>

    </html>
