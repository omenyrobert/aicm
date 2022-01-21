<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$cap = $_POST['cap'];

		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}


		$sql = "SELECT * FROM acv WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		
	$sql = "INSERT INTO letters (id, cap,photo) VALUES ('$id', '$cap','$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Document added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: moreacv.php');
?>