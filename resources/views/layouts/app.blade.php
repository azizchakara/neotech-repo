
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
    
      <title>AdminLTE 3 | Starter</title>
    
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          
        </ul>
        
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          
          <span class="brand-text font-weight-light">NeoTechIt</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Home</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('candidats.index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Candidats</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('candidats.create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ajouter Candidat</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>About</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->
    
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020-2021 <a href="http://neo-techit.com">Neo TechIt</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->
    
    <!-- REQUIRED SCRIPTS -->
    
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    </body>
  </html>
    