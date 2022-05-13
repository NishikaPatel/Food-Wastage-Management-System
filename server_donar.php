<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'nishika', 'nishika27', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $age = mysqli_real_escape_string($db, $_POST['age']);
		$birth = mysqli_real_escape_string($db, $_POST['birth']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
        $address = mysqli_real_escape_string($db, $_POST['address']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($age)) { array_push($errors, "Age is required"); }
		if (empty($birth)) { array_push($errors, "Birth date is required"); }
		if (empty($phone)) { array_push($errors, "Phone no is required"); }
		if (empty($gender)) { array_push($errors, "Gender is required"); }
		if (empty($address)) { array_push($errors, "Address is required"); }	
		

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "insert into donar_table(username, email, password, age, birth,phone,gender,address)
            VALUES('$username', '$email','$password','$age', '$birth', '$phone','$gender','$address')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: mailindex_donar.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM donar_table WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index_donar.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>