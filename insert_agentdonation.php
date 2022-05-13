<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style_agentdonation.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<html>

  <body>
     <h1>My Donation</h1>
	<form method="post" action="process_agentdonation.php">
		<div class="input-group">
		<label><i class="fas fa-user"></i> Agent name</label>
		<input type="text" name="username" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-envelope"></i> E-mail</label>
		<input type="email" name="email" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-user"></i> Donar's Name</label>
		<input type="text" name="donarname" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-calendar-day"></i> Date of collecting food</label>
		<input type="date" name="dateofcollectingfood" required>
		</div>
		<div class="input-group">
		<label><i class="far fa-clock"></i> Time of collecting food</label>
		<input type="time" name="timeofcollectingfood" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-home"></i> Orphanage Name</label>
		<input type="text" name="orphanagename" required>
		</div>
		<div class="input-group">
		<label><i class="fas fa-map-marker-alt"></i> Location</label>
				<input type="text" name="location" required>
		</div>
		<input type="submit" class="btn" name="save" value="submit">
	</form>
  </body>
</html>