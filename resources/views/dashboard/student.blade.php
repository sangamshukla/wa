@extends('layouts.app')

@section('content')
<div class="content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                    </ol>
                </div>
                <h4 class="page-title">Welcome {{ auth()->user()->name }} :  Happy {{ \Carbon\Carbon::now()->format('l') }}</h4>
                {{-- <h4>{{ $user->name}}</h4> --}}
            </div>
        </div>
    </div>     
    <!-- end page title --> 

</div> <!-- End Content -->
@endsection
