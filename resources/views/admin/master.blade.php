<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ url('/') }}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('/') }}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('/') }}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('/') }}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ url('/') }}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ url('/') }}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ url('/') }}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('/') }}/admin/build/css/custom.min.css" rel="stylesheet">
    <style>
      th{
        text-align: right !important;
      }
    </style>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=jm0f8ocih4c53if4o71xsg4v1gdfawf4xz7sh0zyz7wmvqea"></script>
    <script>tinymce.init({
            selector: 'textarea',
            height: 300,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools wordcount"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
      </script>
  </head>

  <body class="nav-md" style="direction: rtl">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>باشگاه والیبال</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->

            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> داشبورد <span class="fa fa-chevron-down"></span></a></li>
                  <li><a><i class="fa fa-edit"></i> اعلامیه ها <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/">مدیریت دسته بندی ها</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/notification">افزودن</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/notification/list">حذف</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-shopping-cart"></i> مدیریت دوره ها <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/">مدیریت دسته بندی ها</a></li>
                      <li><a href="{{ url('/') }}//adminSecret/product">افزودن</a></li>
                      <li><a href="{{ url('/') }}/">مدیریت برنامه کلاسی</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/product/list">نمایش لیست</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/product/list">حذف</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> کاربران <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/adminSecret/user/list">لیست </a></li>
                      <li><a href="{{ url('/') }}/adminSecret/user/list">حذف </a></li>
                      <li><a href="{{ url('/') }}/">ثبت سابقه ورزشی</a></li>
                      <li><a href="{{ url('/') }}/">مشاهده سابقه ورزشی</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>سیستم حضور و غیاب<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}//adminSecret/teacher">مربیان</a></li>
                      <li><a href="{{ url('/') }}/">بازیکنان</a></li>
                      <li><a href="{{ url('/') }}/">سابقه بازیکن</a></li>
                      <li><a href="{{ url('/') }}/">سابقه مربی</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>تنظیمات <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}//adminSecret/teacher">افزودن مربی</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/teacher/list">حذف مربی</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/teacher/list">لیست مربی</a></li>
                      <li><a href="{{ url('/') }}/">افزودن مدیر</a></li>
                      <li><a href="{{ url('/') }}/">حذف مدیر</a></li>
                      <li><a href="{{ url('/') }}/">تغییر کلمه عبور</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bug"></i> آموزش  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/">مدیریت دسته بندی</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/learn">افزودن</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/learn/list">حذف</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> مربی <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/adminSecret/teacher">افزودن</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/teacher/list">لیست مربیان</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> بازیکنان برتر <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/adminSecret/talent">افزودن</a></li>
                      <li><a href="{{ url('/') }}/adminSecret/talent/list">حذف</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> گالری <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/adminSecret/gallery">افزودن</a>
                      <li><a href="{{ url('/') }}/adminSecret/gallery/list">حذف</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> کلاس این هفته <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/') }}/adminSecret/class">افزودن</a>
                      <li><a href="{{ url('/') }}/adminSecret/class/list">حذف</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('/') }}"><i class="fa fa-laptop"></i> مشاهده وب سایت </a></li>

                </ul>



              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">

          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <style>
            h3,table,td,span,a{
              direction: rtl !important;
              font-family: Tahoma;
            }
            .nav {
              padding-right: 0;
              margin-bottom: 0;
              list-style: none;
            }
            .main_container .top_nav {
              display: block;
              margin-right: 230px;
              margin-left: 0px;
            }
            .site_title {
              font-weight: 400;
              font-size: 22px;
              width: 100%;
              line-height: 59px;
              display: block;
              height: 55px;
              margin: 0;
              padding-right: 10px;
              padding-left: 0px;
            }
          </style>
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ url('/') }}/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('/') }}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{ url('/') }}/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ url('/') }}/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{ url('/') }}/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{ url('/') }}/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ url('/') }}/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{ url('/') }}/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{ url('/') }}/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{ url('/') }}/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="{{ url('/') }}/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{ url('/') }}/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{ url('/') }}/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{ url('/') }}/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{ url('/') }}/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{ url('/') }}/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{ url('/') }}/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{ url('/') }}/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{ url('/') }}/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{ url('/') }}/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{ url('/') }}/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ url('/') }}/admin/vendors/moment/min/moment.min.js"></script>
    <script src="{{ url('/') }}/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ url('/') }}/admin/build/js/custom.min.js"></script>

  </body>
</html>
