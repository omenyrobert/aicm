<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
	    $dob=$_POST['dob'];
	    $gender=$_POST['gender'];
	    $skills=$_POST['skills'];
	 
	        

		$sql = "SELECT * FROM kids WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE kids SET fullname = '$fullname', dob = '$dob', gender = '$gender', skills='$skills' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'kid updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: kids.php');

?>