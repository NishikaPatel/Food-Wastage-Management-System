<?php include('server_admin.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style_admin1.css">
</head>
<body >
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register_admin.php">

		<?php include('errors_admin.php'); ?>

		<div class="input-group">
			<label><i class="fas fa-user"></i> Username</label>
			<input type="text" name="username" >
		</div>

		<div class="input-group">
			<label><i class="fas fa-envelope"></i> Email</label>
			<input type="email" name="email" >
		</div>
		
		<div class="input-group">
			<label><i class="fas fa-unlock"></i> Password</label>
			<input type="password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
		</div>

		<div class="input-group">
			<label><i class="fas fa-lock"></i> Confirm password</label>
			<input type="password" name="password_2">
		</div>

		<div class="input-group">
			<label><i class="fas fa-user-check"></i> Age</label>
			<input type="number" name="age" min="18" title="your age must be greater than 18" value="<?php echo $age; ?>">	
		</div>

		<div class="input-group">
		<label><i class="fas fa-birthday-cake"></i> Birth date</label>
		<input type="date" name="birth" value="<?php echo $birth; ?>">
		</div>

		<div class="input-group">
		<label><i class="fas fa-phone"></i> Phone number</label>
		<input type="tel" name="phone"
		pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
        required>
		<small>Format: 123-456-7890</small>
		</div>
     
		<i class="fas fa-venus-double"></i> Gender
		</br>
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female"> Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male"> Male
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="other"> Other
		
		
		</br>
		<div class="input-group">
		<label><i class="fas fa-address-card"></i> Address</label>
		<textarea name="address"
          	rows="5" cols="30"></textarea>
		</div>

		
		<div class="input-group">
			<button type="submit" name="reg_user" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login_admin.php">Sign in</a>
		</p>
	</form>
</body>
</html>