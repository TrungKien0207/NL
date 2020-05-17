<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin_asset/css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('admin_asset/images/1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login user
				</span>

				@if(count($errors) > 0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{$err}} <br>
						@endforeach
					</div>
				@endif

				@if(session('thongbao'))
					<div class="alert alert-danger">
						{{session('thongbao')}}
					</div>
				@endif

				<form class="login100-form validate-form p-b-33 p-t-5" action="admin/login" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
	                	{{csrf_field()}} <!-- có dòng này mới được submit -->
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<script src="admin_asset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="admin_asset/vendor/animsition/js/animsition.min.js"></script>
	<script src="admin_asset/vendor/bootstrap/js/popper.js"></script>
	<script src="admin_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="admin_asset/vendor/select2/select2.min.js"></script>
	<script src="admin_asset/vendor/daterangepicker/moment.min.js"></script>
	<script src="admin_asset/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="admin_asset/vendor/countdowntime/countdowntime.js"></script>
	<script src="admin_asset/js/main.js"></script>

</body>
</html>