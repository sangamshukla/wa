<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Teacher dashboard</title>

    <!-- Custom fonts for this template-->
    <link
      {{-- href="{{asset('wa/admindashboard/css/vendor/fontawesome-free/css/all.min.css')}}" --}}
      href="{{asset('wa/admindashboard/vendor/fontawesome-free/css/all.min.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
      type="text/css"
    />

    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
    />
    <link rel="stylesheet" href="{{asset('wa/admindashboard/css/style.css')}}" />
    <!-- Custom styles for this template-->
    <link href="{{ asset('wa/admindashboard/css/student-admin.css')}}" rel="stylesheet" />
    <link href="{{ asset('wa/admindashboard/css/session.css')}}" rel="stylesheet" />
    <style>
      .sidebar .sidebar-brand {
      height: 0;
      text-decoration: none;
      font-size: 1rem;
      font-weight: 800;
      padding: 0;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 0.05rem;
      z-index: 1;
    }
    .prime {
      background-color: #71f042 !important;
    }
    </style>
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
     @include('class.sidebar')

      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
         @include('class.topnav')
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            @yield('content')
            <!-- Content Row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
      @include('class.footer')
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('wa/admindashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('wa/admindashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('wa/admindashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('wa/admindashboard/js/student.js')}}"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $(function () {
        $("#datepicker").datepicker({
          numberOfMonths: 3,
          showButtonPanel: true,
        });
      });
    </script>
  </body>
</html>
