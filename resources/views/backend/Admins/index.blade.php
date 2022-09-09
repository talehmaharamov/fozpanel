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
            <button class="btn btn-success mb-2">{{ trans('create') }}</button>
        </div>
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        @include('backend.Admins.tables.index')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
@endsection
