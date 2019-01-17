<!--custom dashboard page modified based on sb-admin-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS-->
    <link href="{{ URL::asset('css/sb-admin/bootstrap/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ URL::asset('css/sb-admin/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ URL::asset('css/sb-admin/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ URL::asset('css/sb-admin/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="/">Valdosta State University</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

      <!-- Navbar Search -->
      @include('inc.sb-admin.navbar_search')

      <!-- Navbar -->
      @include('custom_inc.navbar')

    </nav>

<!--{wrapper}-->
    <div id="wrapper">

      <!-- Sidebar -->
      @include('custom_inc.sidebar')

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Custom Layout-->
          <main>
            @yield('content')
          </main>
         

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('custom_inc.sticky_footer')

      </div>
      <!-- /.content-wrapper -->

    </div>
<!--{/wrapper}-->


    <!-- Scroll to Top Button-->
    @include('inc.sb-admin.scroll_to_top_button')

    <!-- Logout Modal-->
    @include('inc.sb-admin.logout_modal')


    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript 
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
    -->
    

    <!-- Core plugin JavaScript-->
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/sb-admin/chart.js/Chart.min.js"></script>
    <script src="js/sb-admin/datatables/jquery.dataTables.js"></script>
    <script src="js/sb-admin/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/sb-admin/demo/datatables-demo.js"></script>
    <script src="js/sb-admin/demo/chart-area-demo.js"></script>

  </body>

</html>