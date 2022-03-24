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
@include('frontend.include.main')
<!-- End main Menu  -->

<!-- Start Footer  -->
<!-- <footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                Footer-1
            </div>
            <div class="col-md-4 col-sm-12">
                Footer-2
            </div>
            <div class="col-md-4 col-sm-12">
                Footer-3
            </div>
        </div>
    </div>
</footer> -->
<!-- End Footer  -->

<!--Start JS-->
@include('frontend.include.script')
<!--End JS-->
</body>
</html>
