

<!DOCTYPE html>
<html>
<head>
	<title>Capture login form Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="public/backend/loginadmin/css/style.css">
	<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Capture login form  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />	
	
</head>
<body>
	<div class="w3layouts">
		<div class="signin-agile">
			<h2>Vui lòng đăng nhập</h2>
			<?php
			$message = Session::get('message');
			if($message){
				echo '<span class="text-alert">'.$message.'</span>';
				Session::put('message',null);
			}
			?>
			<form action="{{URL::to('/admin-dashboard')}}" method="post">
				{{ csrf_field() }} <!-- nó bảo mật hơn -->
				<input type="email" name="admin_email" class="email" placeholder="Email" required="">
				<input type="password" name="admin_password" class="password" placeholder="Password" required="">
				<ul>
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>Remember me</label>
					</li>
				</ul>
				<a href="#">Forgot Password?</a><br>
				<div class="clear"></div>
				<input type="submit" value="Login">
			</form>
		</div>
		<div class="clear"></div>
	</div>
	
	
<body>
</html>