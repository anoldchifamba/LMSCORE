<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atacademy -Registration</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="uploads/images/logo/liveonlineacademy/logoicon.png" type="image/x-icon"> <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100"  style="background: rgb(211,211,211);
background: radial-gradient(circle, rgba(211,211,211,1) 4%, rgba(255,255,255,1) 63%);">
        <div class="wrap-login100" style="width: 470px; ">



                <form method="post" action="{{ url('/register') }}" class="login100-form validate-form"style="margin-top: -100px;">

                    {!! csrf_field() !!}
                    <a  href="{{ url('/') }}">

                    <span class="login100-form-title">
					   <img src="uploads/images/logo/liveonlineacademy/logo.png" alt="IMG" style="border-radius: 15px; width: 150px;">

					</span>
                    </a>

                    <div class="wrap-input100 validate-input  form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input type="text" class="input100" name="name" value="{{ old('name') }}" placeholder="Full Name">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('name'))
                            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                        @endif
                    </div>

                <div class="wrap-input100 validate-input form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="input100" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="input100" placeholder="Confirm password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
                    @endif
                </div>





                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" style="background: #dc3545;">Register</button>

                </div>



                <div class="text-center">
                    <a class="txt2" href="login">
                       Login in your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
