@extends('layouts.backend')
@section('styles')
    <link href="{{asset('backend/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container">
        {{--        <div class="row ">--}}
        <div id="flHorizontalForm" class="col-lg-12 ">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>{{ trans('permissions') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form method="post" action="{{ route('backend.permission.store',locale()) }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label for="hEmail"
                                       class="col-xl-2 col-sm-3 col-sm-2 col-form-label">{{ trans('name') }}
                                    : <span class="text-danger">*</span> </label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="text" name="name" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="hPassword"
                                       class="col-xl-2 col-sm-3 col-sm-2 col-form-label">{{ trans('guard-name') }}:
                                    <span
                                        class="text-danger">*</span></label>
                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                    <input type="text" name="guardName" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div id="saveform" class="form-group row save">
                                <div class="col-sm-10 save">
                                    <button type="submit" class="btn btn-primary mt-3">{{ trans('save') }}</button>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="form-group row mb-4">--}}
                        {{--                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">{{ trans('name') }}--}}
                        {{--                                : <span class="text-danger">*</span> </label>--}}
                        {{--                            <div class="col-xl-10 col-lg-9 col-sm-10">--}}
                        {{--                                <input type="text" name="name" class="form-control" id="" placeholder="">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="form-group row mb-4">--}}
                        {{--                            <label for="hPassword"--}}
                        {{--                                   class="col-xl-2 col-sm-3 col-sm-2 col-form-label">{{ trans('guard-name') }}: <span--}}
                        {{--                                    class="text-danger">*</span></label>--}}
                        {{--                            <div class="col-xl-10 col-lg-9 col-sm-10">--}}
                        {{--                                <input type="text" name="guardName" class="form-control" id="" placeholder="">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div id="saveform" class="form-group row save">--}}
                        {{--                            <div class="col-sm-10 save">--}}
                        {{--                                <button type="submit" class="btn btn-primary mt-3">{{ trans('save') }}</button>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </form>
                </div>
            </div>
            {{--            </div>--}}
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('backend/assets/js/scrollspyNav.js')}}"></script>
@endsection
