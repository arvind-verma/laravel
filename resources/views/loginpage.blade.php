<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<style>
body {
   
    background: linear-gradient(to top, #151713, #612627d6);
}
</style>
<link href="{{ ('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />


<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body style="linear-gradient(to top, #151713, #ebc3dbd6)">
	<!-- main --> 
	<div class="main-w3layouts wrapper">
		<h1>Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{action('AddresController@doLogin')}}" method="post">
				
					<input class="text email" type="email" name="email" placeholder="Email" >
					<span  class="text email {{ $errors->has('email') ? ' is-invalid' : '' }}"></span>
					<input class="text" type="password" name="password" placeholder="Password"></br>
					<span  class="text {{ $errors->has('password') ? ' is-invalid' : '' }}"></span>

					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					
					
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" style="background: #76b852; border: #76b852;" name="submit" value="Login">
					 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
				</form>
				
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
			</div>
			
		</div>
		<!-- copyright -->
		
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>