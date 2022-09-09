@extends('layouts.backend')
@section('title',trans('settings'))
@section('styles')
    <link href="{{asset('backend/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('backend/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="layout-px-spacing">
        <div class="seperator-header">
            <a class="btn btn-success mb-2" href=" {{ route('backend.settings.create',locale()) }} ">
                {{ trans('create') }}
            </a>
        </div>
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        @include('backend.Settings.tables.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('backend/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/dashboard/dash_1.js')}}"></script>
@endsection
