<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$empid = $_POST['empid'];
	    $dob=$_POST['dob'];
	    $gender=$_POST['gender'];
	    $phone=$_POST['phone'];
	    $email=$_POST['email'];
	    $role=$_POST['role'];
	    $address=$_POST['address'];
	        

		$sql = "SELECT * FROM kidsstaff WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE kidsstaff SET fullname = '$fullname', empid='$empid', dob = '$dob', gender = '$gender', phone = '$phone', email='$email', role='$role', address='$address' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Staff updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: kidsstaff.php');

?>