<?php
include_once 'database_agentdonation.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 $donarname = $_POST['donarname'];
	 $dateofcollectingfood = $_POST['dateofcollectingfood'];
	 $timeofcollectingfood = $_POST['timeofcollectingfood'];
	 $orphanagename = $_POST['orphanagename'];
     $location = $_POST['location'];
	 $sql = "INSERT INTO agent_donation(username,email,donarname,dateofcollectingfood,timeofcollectingfood,orphanagename,location)
	 VALUES ('$username','$email','$donarname','$dateofcollectingfood','$timeofcollectingfood','$orphanagename','$location')";
	 if (mysqli_query($conn, $sql)) {
	 echo"<script>alert('Your donation request has been noted successfully!!')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>