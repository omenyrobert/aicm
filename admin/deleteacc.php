<?php
	include 'includes/session.php';

	if(isset($_GET['del'])){
		$id = $_GET['del'];
		$sql = "DELETE FROM admins WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Account deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: accounts.php');
	
?>