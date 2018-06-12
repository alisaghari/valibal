<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/css/normalize.css">
    <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ url('/') }}/studentDashboard/assets/scss/style.css">
    <link href="{{ url('/') }}/studentDashboard/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">{{ $username }}</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/') }}/product/cart/view"> <i class="menu-icon fa fa-dashboard"></i>داشبورد </a>
                </li>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->

                <li>
                    <a href="{{ url('/') }}/product/cart/view"> <i class="menu-icon fa fa-shopping-cart"></i>سبد خرید </a>
                </li>
                <li>
                    <a href="{{ url('/') }}/my/gallery/view"> <i class="menu-icon fa fa-picture-o"></i>گالری من</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{ url('/') }}/studentDashboard/images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-backward" style="padding: 10px"></i>بازگشت</a>
                    </div>
                </div>



            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>@yield('title')</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        @yield('content')
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{ url('/') }}/studentDashboard/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/plugins.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/main.js"></script>


<script src="{{ url('/') }}/studentDashboard/assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/dashboard.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/widgets.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="{{ url('/') }}/studentDashboard/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>
