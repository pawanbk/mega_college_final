<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
    <div id="preloader"></div>
    <div class="wrapper">
        @include('components.header')
        @yield('content')
        @include('components.footer')
    </div>
     <!-- jquery-->
     <script src="{{url('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="{{url('js/plugins.js')}}" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="{{url('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="{{url('js/wow.min.js')}}"></script>
    <!-- Nivo slider js -->
    <script src="{{url('vendor/slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{url('vendor/slider/home.js')}}" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{url('vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="{{url('js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="{{url('js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="{{url('js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <!-- Countdown js -->
    <script src="{{url('js/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="{{url('js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="{{url('js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="{{url('js/jquery.gridrotator.js')}}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{url('js/main.js')}}" type="text/javascript"></script>
</body>
</html>