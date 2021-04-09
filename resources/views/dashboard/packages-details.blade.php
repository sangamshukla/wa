@extends('layouts.student')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 style=" margin-top: 82px;" class="h3 mb-0 text-gray-800 my_package">Comming Soon</h1>
    
</div>
@endsection
@section('session.css')
<link rel="stylesheet" href="{{ asset('wa/dashboard/sessionlist/css/student-admin.css') }}">

<link rel="stylesheet" href="{{ asset('wa/dashboard/sessionlist/css/session.css') }}">
@endsection

@section('js')
<script src="/wa/dashboard/sessionlist/vendor/jquery/jquery.min.js"></script>
<script src="/wa/dashboard/sessionlist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="/wa/dashboard/sessionlist/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="/wa/dashboard/sessionlist/js/student.js"></script>
  <!-- Page level plugins -->
  <script src="/wa/dashboard/sessionlist/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/wa/dashboard/sessionlist/js/demo/chart-area-demo.js"></script>
  <script src="/wa/dashboard/sessionlist/js/demo/chart-pie-demo.js"></script>
@endsection