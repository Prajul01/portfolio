<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.include.header')
</head>
<body>
<div class="container-scroller">
    @include('backend.include.nav')
    <div class="container-fluid page-body-wrapper">
        @include('backend.include.side')
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>
    @include('backend.include.footer')
</div>
@include('backend.include.script')
@yield('js')
</body>
</html>
