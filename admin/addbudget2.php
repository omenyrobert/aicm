<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$item = $_POST['item'];
	    $unicost=$_POST['unicost'];
	    $qty=$_POST['qty'];
	    $comment=$_POST['comment'];
	
	    
        
		

		$sql = "INSERT INTO budget2 (item, unicost, qty, comment) VALUES ('$item', '$unicost', '$qty', '$comment')";
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

	header('location: women2.php');
?>