<h1>Your Information:</h1>

<?php
	//print_r($_POST)
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$department = $_POST['department'];

	echo "First Name: " .$first_name . "<br>";
	echo "Last Name: " .$last_name . "<br>";
	echo "Gender: " .$gender . "<br>";
	echo "Email: " .$email . "<br>";
	echo "Phone: " .$phone . "<br>";
	echo "Masaage: " .$message . "<br>";
	echo "Department: " .$department . "<br>";

?>
