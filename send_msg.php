<?php

include_once'notification_conn.php';

if(isset($_POST['send']))
{
	$name = $_POST['name'];
	$msg = $_POST['msg'];
	$date = date('y-m-d h:i:s');
	
	$sql_insert = mysqli_query($conn,"INSERT INTO message (name,message,cr_date) VALUES ('$name','$msg','$date')");
	if($sql_insert)
	{
		echo "<script>alert('message send successfully');</script>";
	}
	else
	{
		echo mysqli_error($conn);
		exit;
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
  <style>
form
{
	border-style: solid;
	border-width: 3px;
	 border-color: white;
  padding: 12px 20px;
  margin: 8px 0;
}
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="own_style.css">

    <title>Hello, world!</title>
  </head>
  <body background="sendpic.png">

 <div class="container" id="center">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		
		<form method="post">
	
			  <div class="form-group">
				<label for="exampleInputEmail1"><i class="fas fa-user"></i> Name</label>
				<input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type your name" required>
			  </div>
			 <div class="form-group">
				<label for="exampleFormControlTextarea1"> <i class="fas fa-envelope"></i> Enter Message</label>
			<textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3" required></textarea>
			</div>
			  <button type="submit" class="btn btn-primary" name="send">Submit</button>
			  
		</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
 </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>