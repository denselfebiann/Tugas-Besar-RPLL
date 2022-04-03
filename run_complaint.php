<?php
	$name = $_POST['contactName'];
	$email = $_POST['contactEmail'];
	$title = $_POST['title'];
	$description = $_POST['contactDesc'];
	
	$con = mysqli_connect("localhost", "root", "", "wrap_database");
	$sql = "INSERT INTO complaint(name, email, title, desciption)
			VALUES('" . $name . "', ' " . $email . "', '" . $title . "', '" . $description . "')
			";
	if(mysqli_query($con, $sql)){
		echo "<script>alert('Thanks for submiting your complaint!!');document.location = 'javascript:history.back(0)';</script>";
	}else{
		echo "<script>alert('Submiting unsuccessful!!\nPlease call customer center!!');document.location = 'javascript:history.back(0)';</script>";
	}
?>