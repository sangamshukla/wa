<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"xx
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Teacher dashboard</title>

    <!-- Custom fonts for this template-->

    <link
      href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

    <link
      href="{{asset('wa/operationdashboard/vendor/fontawesome-free/css/all.min.css')}}"
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
    <!-- Custom styles for this template-->
    <link href="{{asset('wa/operationdashboard/css/student-admin.css')}}" rel="stylesheet" />
    <link href="{{asset('wa/operationdashboard/css/topSidebar.css')}}" rel="stylesheet" />
  </head>
<body id="page-top">
        <!-- Page Wrapper -->
            <div id="wrapper">
                @include('operation.sidebar')
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        @include('operation.topnav')
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                    <!-- Footer -->
                    <footer class="sticky-footer">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>©Copyright 2021-2022 WA Academy. All Rights Reserved </span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->
                </div>
            </div>
        <!-- End of Page Wrapper -->

    <!-- End of Content Wrapper -->

<!-- End of Page Wrapper -->
<!-- Bootstrap core JavaScript-->
<script src="{{asset('wa/operationdashboard/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('wa/operationdashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('wa/operationdashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('wa/operationdashboard/js/student.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

</body>
</html>
