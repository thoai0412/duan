<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')
	<link rel="icon" type="/eshopper/image/png" href="/eshopper/images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/eshopper/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('/eshopper/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/niceselect.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/flex-slider.min.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/css/slicknav.min.css')}}">
	<link rel="stylesheet" href="{{asset('/eshopper/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/eshopper/style.css')}}">   
    @yield('css')
    </head>

    <body class="js">




        @include('components.header')


        @yield('content')


        @include('components.footer')


            	<!-- Jquery -->
    <script src="{{asset('/eshopper/js/jquery.min.js')}}"></script>
    <script src="{{asset('/eshopper/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('/eshopper/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('/eshopper/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('/eshopper/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('/eshopper/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('/eshopper/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('/eshopper/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('/eshopper/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('/eshopper/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('/eshopper/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('/eshopper/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('/eshopper/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('/eshopper/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('/eshopper/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('/eshopper/js/easing.js')}}"></script>
	<!-- Active JS -->
    <script src="{{asset('/eshopper/js/active.js')}}"></script>
    @yield('js')


    </body>
</html>