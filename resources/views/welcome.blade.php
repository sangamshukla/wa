@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('wa/welcome.css') }}">
@endsection

@section('content')
    @include('common.content')
@endsection

@section('footer_one')
    @include('common.footer_one')
@endsection
