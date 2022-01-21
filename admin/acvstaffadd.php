<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$fullname = $_POST['fullname'];
		$empid = $_POST['empid'];
	    $dob=$_POST['dob'];
	    $gender=$_POST['gender'];
	    $phone=$_POST['phone'];
	    $email=$_POST['email'];
	    $role=$_POST['role'];
	    $address=$_POST['address'];
	        
        
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO acvstaff (fullname, empid, dob,  gender, phone, email, role, address,photo) VALUES 
		                            ('$fullname','$empid','$dob','$gender','$phone', '$email', '$role', '$address','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'ACV Staff added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: acvstaff.php');
?>