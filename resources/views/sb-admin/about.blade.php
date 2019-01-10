<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Page</title>

    <!-- Bootstrap core CSS-->
    <link href="css/sb-admin/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="css/sb-admin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="css/sb-admin/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Valdosta State University</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
 
       <!-- Navbar Search -->
      @include('inc.sb-admin.navbar_search')

      <!-- Navbar -->
      @include('inc.sb-admin.navbar')

    </nav>

    <div id="wrapper">

     <!-- Sidebar -->
     @include('inc.sb-admin.sidebar')

     <div id="content-wrapper">

       <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item" color = "orange">
              <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">About</li>
          </ol>

          <!-- Main content begins -->
        <div class="main-content">
          <div class="container">
              <div class="content">
                  <h3>About 'Name'</h3>
                  <hr>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
              </div>
          </div>
      </div>
      <!-- Main content ends here -->
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('custom_inc.sticky_footer')

      </div>
      <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

   <!-- Logout Modal-->
   @include('inc.sb-admin.logout_modal')

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin/sb-admin.min.js"></script>
  </body>

</html>
