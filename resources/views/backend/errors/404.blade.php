<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.meta')
    @include('backend.includes.styles')
    <link href="{{asset('backend/assets/css/pages/error/style-400.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body class="error404 text-center">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
            <a href="index.html" class="ml-md-5">
                <img alt="image-404" src="assets/img/90x90.jpg" class="theme-logo">
            </a>
        </div>
    </div>
</div>
<div class="container-fluid error-content">
    <div class="">
        <h1 class="error-number">404</h1>
        <p class="mini-text">Ooops!</p>
        <p class="error-text mb-4 mt-1">The page you requested was not found!</p>
        <a href="index.html" class="btn btn-primary mt-5">Go Back</a>
    </div>
</div>
@include('backend.includes.scripts')
{{--<script src="bootstrap/js/bootstrap.min.js"></script>--}}
</body>
</html>
