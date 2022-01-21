<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
	    $dob=$_POST['dob'];
	    $gender=$_POST['gender'];
	    $house=$_POST['house'];
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

		$sql = "SELECT * FROM acv WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE acv SET fullname = '$fullname', dob = '$dob', gender = '$gender', house = '$house', school='$school', level='$level', class='$class', addressfrom='$addressfrom', family='$family', guardians='$guardians',guardiansco='$guardiansco', background='$background', health='$health',sponsor='$sponsor' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Child updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: acv.php');

?>