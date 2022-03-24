<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.include.header')

</head>
<body>

<!-- Start Nav Menu  -->
<nav>
    @include('frontend.include.nav')
</nav>
<!-- End Nav Menu  -->

<!-- Start main Menu  -->
@yield('contents')


<!--Start JS-->
@include('frontend.include.script')
<!--End JS-->
</body>
</html>
