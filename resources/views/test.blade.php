<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
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
<body>
	<!-- main -->
	<?php  
	//if(0<count($errors)){ print_r($errors);}  ?>
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			
				<form action="{{action('AddresController@store')}}" method="post">
				 <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label></br>
					<input class="text  {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Full Name"  value="{{ old('name') }}"></br>
					
					 <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Email ID') }}</label>
					<input class="text  {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}"></br>
					
					<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label></br>
					<input class="text  {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" value="{{ old('password') }}"></br>
					
									 <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Phone No ') }}</label></br>

					<input class="text  {{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" value="{{ old('phone') }}" name="phone" placeholder="Phone No" ></br>
									 <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label></br>

					<input class="text  {{ $errors->has('address') ? ' is-invalid' : '' }}" type="text" name="address" value="{{ old('address') }}" placeholder="Address" "></br	>
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					
					 <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label></br>

                            <div class="col-md-6">
						
								<input type="radio" id="s20" name="role" value="1" /><label for="s20" title="5">Doctor</label>
								<input type="radio" id="s19" name="role" value="0" / checked><label for="s19" title="4">User</label>
							
							</div>
						</div>
					
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="SIGNUP">
					
					
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