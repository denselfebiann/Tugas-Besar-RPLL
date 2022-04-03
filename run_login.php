<?php
	$con = mysqli_connect("localhost", "root", "", "wrap_database");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE email = '" . $email . "' AND password = '" . $password . "'LIMIT 1";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) == 1){
		echo "<script>document.location = 'indexLogin.php?a=" . $email . "';</script>";
	}else{
		echo "<script>alert('Password or username wrong!');document.location = 'login.php';</script>";
	}
	mysqli_close($con);
?>