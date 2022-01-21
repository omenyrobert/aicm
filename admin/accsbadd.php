<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$cno = $_POST['cno'];
		$fullname = $_POST['fullname'];
	    $dob=$_POST['dob'];
	    $gender=$_POST['gender'];
	    $school=$_POST['school'];
	    $level=$_POST['level'];
	    $class=$_POST['class'];
	    $addressfrom=$_POST['addressfrom'];
	    $family=$_POST['family'];
	    $guardians=$_POST['guardians'];
        $guardiansco=$_POST['guardiansco'];
	    $background=$_POST['background'];
	    $health=$_POST['health'];
	    $sponsor=$_POST['sponsor'];
	    
        
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO accsb (cno,fullname, dob, gender, school, level, class, addressfrom, family,guardians, guardiansco, background, health, sponsor,photo) VALUES ('$cno','$fullname', '$dob', '$gender','$school', '$level', '$class', '$addressfrom', '$family','$guardians', '$guardiansco', '$background', '$health', '$sponsor','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Child added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: accsb.php');
?>