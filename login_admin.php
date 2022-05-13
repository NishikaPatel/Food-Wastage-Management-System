<?php include('server_admin.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style_admin.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login_admin.php">

		<?php include('errors_admin.php'); ?>

		<div class="input-group">
			<label><i class="fas fa-user"></i> Username</label>
			<input type="text" name="username" required >
		</div>
		<div class="input-group">
			<label><i class="fas fa-lock"></i> Password</label>
			<input type="password" name="password" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" onclick="alert('Login successfull')" formaction="admintry.php">Login</button>&nbsp&nbsp<a href="forgotpassword_admin.php">Forgot Password?</a>
		</div>
		<p>
			Not yet a member? <a href="register_admin.php">Sign up</a>
		</p>
	</form>

</div>
</div>


</body>
</html>