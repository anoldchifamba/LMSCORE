
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atacdemy-Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="../uploads/images/logo/liveonlineacademy/logoicon.png" type="image/x-icon"> <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100"  style="background: rgb(211,211,211);
background: radial-gradient(circle, rgba(211,211,211,1) 4%, rgba(255,255,255,1) 63%);">

        <div class="wrap-login100" style="width: 470px; ">



        <form class="login100-form validate-form" method="post" action="{{ url('/password/email') }}" style="margin-top: -100px;">
                @csrf


                <a  href="{{ url('/') }}">
 <span class="login100-form-title">
						   <img src="../uploads/images/logo/liveonlineacademy/logo.png" alt="IMG" style="border-radius: 15px; width: 150px;">

					</span>
                </a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <p class="login-box-msg">Enter Email to reset password</p>

                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>



{{--                --}}
{{--                <div class="wrap-input100 validate-input form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Valid email is required: ex@abc.xyz">--}}
{{--                    <input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Email">--}}
{{--                    <span class="focus-input100"></span>--}}
{{--                    <span class="symbol-input100">--}}
{{--							<i class="fa fa-envelope" aria-hidden="true"></i>--}}
{{--						</span>--}}
{{--                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}
{{--                    @if ($errors->has('email'))--}}
{{--                        <span class="help-block">--}}
{{--                 <strong>{{ $errors->first('email') }}</strong>--}}
{{--             </span>--}}
{{--                    @endif--}}
{{--                </div>--}}





{{--                <div class="wrap-input100 validate-input form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}" data-validate = "Password is required">--}}
{{--                    <input class="input100" type="password" name="password" placeholder="Password">--}}
{{--                    <span class="focus-input100"></span>--}}
{{--                    <span class="symbol-input100">--}}
{{--							<i class="fa fa-lock" aria-hidden="true"></i>--}}
{{--						</span>--}}
{{--                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
{{--                    @if ($errors->has('password'))--}}
{{--                        <span class="help-block">--}}
{{--                 <strong>{{ $errors->first('password') }}</strong>--}}
{{--             </span>--}}
{{--                    @endif--}}
{{--                </div>--}}

{{--                <div class="container-login100-form-btn">--}}
{{--                    <button class="login100-form-btn" style="background: #dc3545;">--}}
{{--                        Login--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <div class="text-center p-t-12">--}}
{{--						<span class="txt1">--}}
{{--							Forgot--}}
{{--						</span>--}}
{{--                    <a class="txt2" href="{{ url('/password/reset') }}">--}}
{{--                        Username / Password?--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="text-center ">--}}

{{--                    <a class="txt2" href="{{ url('/register') }}">--}}
{{--                        Create your Account--}}
{{--                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">
                            <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                        </button>
                    </div>
                </div>

        </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="./vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
