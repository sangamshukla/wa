@extends('layouts.student_dashboard')

@section('student-content')
<!-- Page Heading -->
@php
    foreach($status as $st)
    {
        $status=$st->payment_status;
    }
@endphp
@if ($status=="yes")
    @include('dashboard.session-list')
    {{-- @include('dashboard.newsession-list') --}}

@else
    @include('dashboard.content')

@endif
@endsection


@section('style')
<link href="{{asset('wa/dashboard/css/student-admin.css')}}" rel="stylesheet">
<link href="{{asset('wa/dashboard/css/session.css')}}" rel="stylesheet">
<<<<<<< HEAD
@endsection
@section('js')
{{-- <script src="{{ asset('wa/dashboard/sessionlist/vendor/jquery/jquery.min.js')}}"></script> --}}
<!--<script src="/wa/dashboard/sessionlist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!-- Core plugin JavaScript-->
<!--<script src="/wa/dashboard/sessionlist/vendor/jquery-easing/jquery.easing.min.js"></script>-->
<!-- Custom scripts for all pages-->
{{-- <script src="{{ asset('wa/dashboard/sessionlist/js/student.js') }}"></script> --}}
  <!-- Page level plugins -->
  {{-- <script src="{{ asset('wa/dashboard/sessionlist/vendor/chart.js/Chart.min.js') }}"></script> --}}

  <!-- Page level custom scripts -->
  {{-- <script src="{{ asset('wa/dashboard/sessionlist/js/demo/chart-area-demo.js')}}"></script> --}}
  {{-- <script src="{{ asset('wa/dashboard/sessionlist/js/demo/chart-pie-demo.js')}}"></script> --}}
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
@endsection
