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
@endsection
