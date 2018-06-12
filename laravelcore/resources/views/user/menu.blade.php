    <nav role="navigation"  id="NavConfigScroll">
        <ul>
            <li><a href="{{ url('/') }}">صفحه اصلی</a></li>
            <li><a href="{{ url('/learns') }}">آموزش</a></li>
            <li><a href="{{ url('/noti') }}">اعلامیه ها</a></li>
            <li><a href="{{ url('/teachers') }}"> اساتید</a></li>
            <li><a href="{{ url('/products') }}">ثبت نام</a></li>
            <li><a href="{{ url('/galleries') }}">گالری</a></li>
            <li><a href="{{ url('/ContactUs') }}">تماس باما</a></li>
            @if($username=="null")
            <li class="cta"><a  data-toggle="modal" data-target="#exampleModalLong2">ورود / عضویت</a></li>
                @else
                <li class="cta"><a  href="{{ url('/product/cart/view') }}">حساب کاربری من</a></li>
                @endif
        </ul>
    </nav>
    <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                document.getElementById("fh5co-header").style.top = "0";
                document.getElementById("fh5co-header").style.position = "fixed";
                document.getElementById("fh5co-header").style.zIndex = "1000";
                document.getElementById("fh5co-header").style.backgroundColor = "white";

                $("#NavConfigScroll ul li a").hover(function(){
                    $(this).css("color", "black");
                    $(this).css("border-color", "black");
                }, function(){
                    $(this).css("color", "gray");
                    $(this).css("border-color", "gray");
                });

                $("#NavConfigScroll ul li a").css("color", "gray");
                $(".change").css("color", "gray");
                $("#NavConfigScroll ul li a").css("border-color", "gray");
                $("#NavConfigScrollLogo a").css("color", "gray");
                $(".cta a").css("border", "2px solid #737373");


            } else {
                document.getElementById("fh5co-header").style.top = "0";
                document.getElementById("fh5co-header").style.position = "";
                document.getElementById("fh5co-header").style.zIndex = "";
                document.getElementById("fh5co-header").style.backgroundColor = "";
                $("#NavConfigScroll ul li a").css("color", "");
                $("#NavConfigScrollLogo a").css("color", "");
                $(".change").css("color", "");
                $(".cta a").css("border", "2px solid #fff");
                $("#NavConfigScroll ul li a").hover(function(){
                    $(this).css("color", "");
                    $(this).css("border-color", "");
                }, function(){
                    $(this).css("color", "");
                    $(this).css("border-color", "");
                });
            }
        }
    </script>

    <!--<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">Dashboard</li>-->