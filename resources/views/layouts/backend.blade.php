<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.meta')
    @include('backend.includes.styles')
    @yield('styles')
</head>
<body class="sidebar-noneoverflow">
@include('backend.includes.loader')
@include('backend.includes.navbar')
<div class="main-container" id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    @include('backend.includes.sidebar')
    <div id="content" class="main-content">
        @yield('content')
    </div>
</div>
@include('backend.includes.scripts')
@yield('scripts')
@include('backend.includes.notification')
</body>
</html>
