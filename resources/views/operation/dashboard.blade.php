@extends('layouts.operation_dashboard')

@section('content')
<link href="{{asset('wa/operationdashboard/css/session.css')}}" rel="stylesheet" />
          <!-- Begin Page Content -->
            <!-- Page Heading -->

            <div style="margin-top: 90px;" class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1  class="h3 mb-0 text-gray-800 session_heading">My Session</h1>
            </div>

            <div class="add_class"><a href="{{route('teacher.management')}}">Manage Classes</a></div>
<<<<<<< HEAD
             <div class="add_class"><a href="{{route('class.store')}}">Add Classes</a></div> 
             
=======
            <div class="add_class"><a href="{{route('class.store')}}">Add Classes</a></div>          
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
@endsection
