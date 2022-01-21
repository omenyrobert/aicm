<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$dob=$_POST['dob'];
	    $gender=$_POST['gender'];
	    $contact=$_POST['contact'];
	    $university=$_POST['university'];
	    $course=$_POST['course'];
	    $level=$_POST['level'];
	    $address=$_POST['address'];
	    $family=$_POST['family'];
	    $guardians=$_POST['guardians'];
        $guardiansco=$_POST['guardiansco'];

		$sql = "SELECT * FROM university WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE university SET firstname = '$firstname', dob = '$dob', gender = '$gender', contact='$contact', university='$university', course='$course', level='$level', address='$address', family='$family', guardians='$guardians',guardiansco='$guardiansco' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: university.php');

?>