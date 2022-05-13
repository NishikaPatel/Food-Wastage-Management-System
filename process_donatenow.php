<?php
include_once 'database_donatenow.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $typeoffood = $_POST['typeoffood'];
	 $dateofcooking = $_POST['dateofcooking'];
	 $timeofcooking = $_POST['timeofcooking'];
	 $quantity = $_POST['quantity'];
	 $location = $_POST['location'];
	 $sql = "INSERT INTO donate_now_form (username,email,typeoffood,dateofcooking,timeofcooking,quantity,location)
	 VALUES ('$username','$email','$typeoffood','$dateofcooking','$timeofcooking','$quantity','$location')";
	 if (mysqli_query($conn, $sql)) {
	echo"<script>alert('Your donation request has been noted successfully!!')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>