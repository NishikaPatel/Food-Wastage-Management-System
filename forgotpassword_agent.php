<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$connection = new mysqli("localhost","nishika","nishika27","registration");

require 'C:xampp\htdocs\finalproject\PHPMailer-master\src\Exception.php';
require 'C:xampp\htdocs\finalproject\PHPMailer-master\src\PHPMailer.php';
require 'C:xampp\htdocs\finalproject\PHPMailer-master\src\SMTP.php';

if($_POST)
{
  $email=$_POST['email'];
  $selectquery=mysqli_query($connection,"select * from agent_table where email='{$email}'") or die(mysqli_error($connection));
  $count=mysqli_num_rows($selectquery);
  $row=mysqli_fetch_array($selectquery);
   

$mail=new PHPMailer();
try
{
 $mail->SMTPDebug=0;
 $mail->isSMTP();
 
 $mail->Host='smtp.gmail.com';
 $mail->SMTPAutoTLS = false;
 $mail->SMTPAuth=true;
 $mail->Username='nofoodwastenzk@gmail.com';
 $mail->Password='ourproject';
 $mail->SMTPSecure='tls';
 $mail->Port='587';
 $mail->setFrom('nofoodwastenzk@gmail.com' , 'No Food Waste');
 $mail->addAddress($email,$email);

 $mail->isHTML();
 $mail->Subject='Forgot Password';
 $mail->Body="Hi $email your password is {$row['password']}";
 $mail->AltBody="Hi $email your password is {$row['password']}";

 $mail->send();
 echo "<p align='center'> Your Password has been sent on your Email Id </p>";
}
catch(Exception $e)
{
  echo 'Email could not been sent.';
  echo 'Mailer Error:'. $mail->ErrorInfo;
}
}
else
{
  echo"<script>alert('Email Not Found')</script>";  
}


?>


 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity=
	"sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Forgot Password?</title>
</head>
<link rel="stylesheet" type="text/css" href="forgotpasswordstyle.css">
<body>
  <header><br><br><br>
       <h3 align="center">Forgot Password?</h3>
    <div class="simpleform">
<form method="post">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<label> <i class="fas fa-envelope-open"></i></label>&nbsp
<input type="text" name="email" id="button"placeholder="Enter your Email Id" size="30"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" name="submit" value="Submit" class="btn">
</form>
</div>
</header>
</body>
</html>