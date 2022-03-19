<?php
	$con = mysqli_connect("localhost", "root", "", "wrap_database");
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM tabeluser WHERE email = '" . $email . "' AND password = '" . $password . "'LIMIT 1";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) == 1){
		echo "<script>alert('Welcome bitches');document.location = 'login.php';</script>";
	}else{
		echo "<script>alert('Password or username wrong!');document.location = 'login.php';</script>";
	}
	mysqli_close($con);
?>