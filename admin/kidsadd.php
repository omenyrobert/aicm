<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$fullname = $_POST['fullname'];
	    $dob=$_POST['dob'];
	    $gender=$_POST['gender'];
	    $skills=$_POST['skills'];
	 
	    
        
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO kids (fullname, dob, gender, skills,photo) VALUES ('$fullname', '$dob', '$gender','$skills', '$filename')";
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

	header('location: kids.php');
?>