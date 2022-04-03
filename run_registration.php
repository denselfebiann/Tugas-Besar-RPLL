<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$alamat = $_POST['address'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['password2'];
	
	if($password != $confirmPassword){
		echo "<script>alert('Registration Failed!!\nPassword doesn't match!!');document.location = 'registration.php');</script>";
	}else{
		$con = mysqli_connect("localhost", "root", "", "wrap_database");
		$sql = "INSERT INTO users (email, firstName, lastName, password, wrapPay)
				VALUES('" . $email . "', '" . $firstName . "', '" . $lastName . "', '" . $password . "', 0 )
				";
		if(mysqli_query($con, $sql)){
			$sql =  "SELECT idUser FROM users ORDER BY idUser DESC LIMIT 1;";
			$result = $con -> query($sql);
			if($result->num_rows > 0){
				while($row=$result->fetch_assoc()){
					$id = (int)$row["idUser"];
					echo ($row["idUser"]);
				}
			}
			var_dump($id);
			$sql = "INSERT INTO buyer (idUser, alamat)
					VALUES(" . $id . ", '" . $alamat . "')
					";
			if(mysqli_query($con, $sql)){
				echo "<script>alert('Registration successed');document.location = 'login.php';</script>";
			}else{
				echo "<script>alert('Registration unsuccessful!!\nPlease call customer center!!');document.location = 'registration.php';</script>";
			}
		}else{
			echo "<script>alert('Registration unsuccessful!!\nPlease call customer center!!');document.location = 'registration.php';</script>'";
		}
	}
?>