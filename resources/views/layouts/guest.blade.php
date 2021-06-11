<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{ $title ?? 'NTBLTC' }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Recruit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('assets/css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i"
        rel="stylesheet">
</head>

<body>
      <!-- Slider -->
    <div class="hrm-banner-info-hrmltd position-relative">
	  <!-- header -->
    @include('includes.nav_bar')
    <!-- //header -->
    </div>
    <!-- //Slider -->
    {{ $slot }}
    <!-- Footer -->
    @include('includes.bottom_navigation')
    <!-- /Footer -->

    <!-- js -->
    <script src="{{ asset('assets/js/jquery-2.2.3.min.js') }}"></script>
    <!-- Slider-JavaScript -->
    <script src="{{ asset('assets/js/responsiveslides.min.js') }}"></script>
    <script>
        $(function () {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: false,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- //Slider-JavaScript -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- //js -->
    <script src="{{ asset('assets/js/move-top.js') }}"></script>
    <script src="{{ asset('assets/js/easing.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ asset('assets/js/SmoothScroll.min.js') }}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>