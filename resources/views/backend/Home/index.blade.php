@extends('layouts.backend')
@section('title',trans('dashboard'))
@section('styles')
    <link href="{{asset('backend/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

@endsection
@section('scripts')
    <script src="{{asset('backend/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/dashboard/dash_1.js')}}"></script>
@endsection
