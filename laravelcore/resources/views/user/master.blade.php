
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>آکادمی والیبال آینده سازان</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        h1,h2,h3,h4,h5,h6,a,li,span:not(.vjs-icon-placeholder),button,p,label,input,td{
            font-family: "b Roya", Arial, Helvetica, sans-serif !important;

        }
        span,label{
            direction: rtl;
        }
        label{
            float: right;
        }
        nav ul li a{
            font-size: 20px !important;
        }
        nav,h3{
            direction: rtl;
        }
        .btn2 {
            margin-right: 4px;
            margin-bottom: 4px;
            font-family: "Varela Round", Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            /* -webkit-border-radius: 30px; */
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            /* border-radius: 30px; */
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            padding: 4px 20px;
            width: 100%;
            height: 50px;
            font-size: 22px;
        }
        .row {
            margin-left: 0px !important;
            margin-right: 0px !important;;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .li::before {
            content: "• ";
            color: yellow; /* or whatever color you prefer */

        }
        .li{
            direction: rtl;
            font-size: 22px;
            text-align: right;
        }
        .col-sm-6 table{
            width: 100%;
        }
        .col-sm-6 table tr td label{
            float: right;

        }
        .col-sm-6  table tr td input[type='text']{
            float: right;
            padding: 5px !important;
            margin: 10px;
            height: 40px;
            margin-top: -5px;
            width: 100%;
        }
        p,h1,h2,h3,h4,h5,h6{
            direction: rtl;
            text-align: right;
        }
    </style>
    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FreeHTML5.co

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ url('/') }}/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ url('/') }}/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ url('/') }}/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ url('/') }}/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/fonts/font.css">
    <!-- Modernizr JS -->
    <script src="{{ url('/') }}/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ url('/') }}/js/respond.min.js"></script>



    <![endif]-->
    <style>


    </style>
    <link href="https://vjs.zencdn.net/6.9.0/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<body>
    <body>
    @include('user.register')
    <div id="fh5co-page">
        <header id="fh5co-header" role="banner" style="z-index: 9999 !important;">
            <div class="container">
                <div class="row">
                    <div class="header-inner">
                        <h1 style="font-size: 20px !important; padding: 0px ; margin: 0px ; margin-top: 25px"><a href="tel://123456789"><i class="icon-phone"></i> +1 123 456 789</a></h1>
                        @include('user.menu')
                    </div>
                </div>
            </div>
        </header>

    <div class="fh5co-page-title" style="background-image: url(img/contactusbackground.jpg); background-size: cover">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    @yield('title')
                </div>
            </div>
        </div>
    </div>


    @yield("content")
        <style>

                .col-md-push-1 {
                     left:0px !important;
                }
        </style>
        <footer id="fh5co-footer" role="contentinfo">

            <div class="container">
                <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <h2 style="font-weight: bolder ; text-align: right ; color: white ; font-size: 18px">نماد اعتماد</h2>
                    <center><img src="{{ url('/') }}/img/enamd.png"></center>
                </div>
                <div class="col-md-3 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <h2 style="font-weight: bolder ; text-align: right ; color: white ; font-size: 18px">لینک های مهم </h2>

                    <ul class="float" style="text-align: right ; float: right">
                        <li><a href="#">فدراسیون والیبال ایران</a></li>
                        <li><a href="#">آکادمی اختصاصی والیبال</a></li>
                        <li><a href="#">اطلاع رسانی جامع والیبال</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <h2 style="font-weight: bolder ; text-align: right ; color: white ; font-size: 18px">لینک های مهم </h2>

                    <ul class="float" style="text-align: right ; float: right">
                        <li><a href="#">فدراسیون والیبال ایران</a></li>
                        <li><a href="#">آکادمی اختصاصی والیبال</a></li>
                        <li><a href="#">اطلاع رسانی جامع والیبال</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <h2 style="font-weight: bolder ; text-align: right ; color: white ; font-size: 18px">لینک های مهم </h2>

                    <ul class="float" style="text-align: right ; float: right">
                        <li><a href="#">فدراسیون والیبال ایران</a></li>
                        <li><a href="#">آکادمی اختصاصی والیبال</a></li>
                        <li><a href="#">اطلاع رسانی جامع والیبال</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
                    <ul class="fh5co-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                    </ul>
                </div>


                <div class="col-md-12 fh5co-copyright text-center">
                    <p>کلیه حقوق این وبسایت متعلق به یجای خوبی است</p>
                </div>

            </div>
        </footer>
    </div>





    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="{{ url('/') }}/js/google_map.js"></script>



    <!-- jQuery -->
<script src="{{ url('/') }}/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="{{ url('/') }}/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="{{ url('/') }}/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="{{ url('/') }}/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="{{ url('/') }}/js/jquery.flexslider-min.js"></script>

<!-- MAIN JS -->
<script src="{{ url('/') }}/js/main.js"></script>

</body>
</html>

