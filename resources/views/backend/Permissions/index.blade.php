@extends('layouts.backend')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/table/datatable/custom_dt_custom.css')}}">
@endsection
@section('content')
    <div class="layout-px-spacing">
        <div class="seperator-header">
            <a class="btn btn-success mb-2" href=" {{ route('backend.permission.create',locale()) }} ">
                {{ trans('create') }}
            </a>
        </div>
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        @include('backend.Permissions.tables.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
