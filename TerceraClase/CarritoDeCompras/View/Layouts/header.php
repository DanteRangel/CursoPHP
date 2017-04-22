<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carrito de Compras </title>

    <!-- Bootstrap -->
    <script src="assets/js/jquery.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-th"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li><a href="?controller=Producto&metodo=create">Crear Producto</a></li>
                      <li><a href="?controller=Producto&metodo=index">Gestionar Productos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-th"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li><a href="?controller=Usuarios&metodo=create">Crear Producto</a></li>
                      <li><a href="?controller=Usuarios&metodo=index">Gestionar Productos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-shopping-cart"></i> Carrito de Compras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display:none;">
                      <li><a href="?controller=Carrito&metodo=index">Productos</a></li>
                      <li><a href="?controller=Carrito&metodo=show">Ver mi carrito</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="assets/images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right"> 
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height:50em !important;">
