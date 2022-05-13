<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style_donatenow.css">
<html>

  <body>
     <h1>Donate Now Form</h1>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<form method="post" action="process_donatenow.php">
		<div class="input-group">
		<label><i class="fas fa-user"></i>  Username</label>
		<input type="text" name="username" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-envelope"></i> E-mail</label>
		<input type="email" name="email" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-utensils"></i> Type of food</label>
		<input type="text" name="typeoffood" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-calendar-day"></i> Date of cooking</label>
		<input type="date" name="dateofcooking" required>
		</div>
		<div class="input-group">
		<label><i class="far fa-clock"></i> Time of cooking</label>
		<input type="time" name="timeofcooking" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-balance-scale"></i> Quantity</label>
		<select name="quantity" required>
		<option value="less than 1 kg">less than 1 kg</option>
		<option value="more than 2 kg">more than 2 kg</option>
		<option value="more than 3 kg">more than 3 kg </option>
		<option value="more than 5 kg">more than 5 kg</option> 
		</select>
		</div>
		<div class="input-group">
		<label><i class="fas fa-map-marker-alt"></i> Location</label>
		<select name="location" required>
		<option value="mumbai">mumbai</option>
		<option value="pune">pune</option>
		<option value="thane">thane</option>
		<option value="nashik">nashik</option>
		<option value="raigad">raigad</option>
		<option value="kolhapur">kolhapur</option>
		<option value="satara">satara</option>
		<option value="beed">beed</option>
		<option value="sangli">sangli</option>
		<option value="dhule">dhule</option>
		<option value="jalgoan">jalgoan</option>
		<option value="akola">akola</option>
		<option value="latur">latur</option>
		<option value="nagpur">nagpur</option>
		<option value="wardha">wardha</option>
		</select>
		</div>
		<input type="submit" class="btn" name="save" value="submit">
	</form>
  </body>
</html>