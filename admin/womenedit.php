<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$item = $_POST['item'];
		$unicost=$_POST['unicost'];
	    $qty=$_POST['qty'];
	    $comment=$_POST['comment'];
	  

		$sql = "SELECT * FROM budget1 WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE budget1 SET item= '$item', unicost = '$unicost', qty = '$qty', comment='$comment' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Info updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: women.php');

?>