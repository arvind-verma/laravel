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
<title>Update User Profile</title>
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
	$user = auth()->user();  ?>
	<div class="main-w3layouts wrapper">
		<h1>Update User Profile</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
			
				<form action="{{action('AddresController@updatePofile')}}" method="post">
				 <label  class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label></br>
					<input class="text  " type="text" name="name" placeholder="Full Name"  value="{{  $user->name  }}"></br>
					
					 <label class="col-md-4 col-form-label text-md-right">{{ __('Email ID') }}</label>
					<input class="text" type="email" name="email" placeholder="Email" value="{{ $user->email }}"></br>
					
					
					<label  class="col-md-4 col-form-label text-md-right">{{ __('Phone No ') }}</label></br>
					<input class="text" type="text" value="{{ $user->phone }}" name="phone" placeholder="Phone No" ></br>
					
					<label  class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label></br>
					<input class="text" type="text" name="address" value="{{ $user->address }}" placeholder="Address"></br>
					
					<input name="id" type="hidden" name="id" value="{{ $user->id }}"/>
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" name="submit" value="SIGNUP">
					
					
				</form>
				
		
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