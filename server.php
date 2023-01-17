<?php
	session_start();

	// variable declaration
	//$email = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'test_db');


	// FORGOT Password
	if (isset($_POST['forgot_user'])) {
		//$answer = mysqli_real_escape_string($db, $_POST['answer']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$newpassword = mysqli_real_escape_string($db, $_POST['newpassword']);
		$confirmnewpassword = mysqli_real_escape_string($db, $_POST['confirmnewpassword']);

		//if (empty($answer)) {array_push($errors, "You need to answer security question");}
		if (empty($email)) {array_push($errors, "Invalid email");}
		if (empty($newpassword)) {array_push($errors, "Enter valid password");}

		if ($newpassword != $confirmnewpassword) {array_push($errors, "passwords do not match");}

		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE email='$email'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {

				$newpassword = $newpassword;
				$sql = "UPDATE users SET password='$newpassword' where email='$email'";
				mysqli_query($db, $sql);

				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You changed your password";
				header('location: forgotindex.php');
			}else {
				array_push($errors, "Wrong email");
			}
		}
	}

?>
