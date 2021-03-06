<!DOCTYPE html>
<html lang="en">
<head>
    <title>ورود استاد</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ url("/") }}/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url("/") }}/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url("/") }}/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url("/") }}/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url("/") }}/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url("/") }}/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url("/") }}/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ url("/") }}/login/css/main.css">
    <!--===============================================================================================-->
    <style>
        *:not(i){
            font-family: "Iranian Sans" !important;
        }
    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="{{ url("/") }}/login/images/img-01.png" alt="IMG">
            </div>
            {{ Form::open(array('url' => 'login/admin', 'method' => 'post', 'files' => true ,'class'=>'login100-form validate-form') ) }}
            <form class="login100-form validate-form">
					<span class="login100-form-title">
						ورود مدیر
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    {{ Form::text('username','',['class' => 'input100','placeholder'=>'نام کاربری']) }}
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    {{ Form::password('password',['class' => 'input100','placeholder'=>'کلمه عبور']) }}
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    {{ Form::submit('ورود',['class'=>'login100-form-btn']) }}
                </div>


            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{ url("/") }}/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{ url("/") }}/login/vendor/bootstrap/js/popper.js"></script>
<script src="{{ url("/") }}/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{ url("/") }}/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{ url("/") }}/login/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{ url("/") }}/login/js/main.js"></script>

</body>
</html>