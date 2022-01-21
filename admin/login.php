<?php
		include 'includes/session.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $conn->real_escape_string(md5($_POST['password']));

		$sql = "SELECT * FROM admins WHERE email = '$email'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		}
		else{
			$row = $query->fetch_assoc();
			if($password===$row['password']){
				$_SESSION['admin'] = $row['id'];
				$_SESSION['ROLE'] = $row['role'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');

?>