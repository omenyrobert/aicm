<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
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
        
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		//generate voters id
		// $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// $voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO university (firstname, dob, gender, contact, university, course, level, address, family, guardians, guardiansco,photo) VALUES ('$firstname', '$dob', '$gender', '$contact', '$university', '$course', '$level', '$address', '$family', '$guardians', '$guardiansco','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: university.php');
?>