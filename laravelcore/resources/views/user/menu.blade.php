    <nav role="navigation">
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

    <!--<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">Dashboard</li>-->