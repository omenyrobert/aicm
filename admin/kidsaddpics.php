<?php
	include 'includes/session.php';

  if (isset($_POST['add'])) {
    $uploadFolder = '../images/';
    foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
        $imageName = $_FILES['imageFile']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

        // save to database
        $query = "INSERT INTO kidsgallery SET photo='$imageName'";
        $run = $conn->query($query) or die("Error in saving image".$conn->error);
    }
    if ($result) {
        echo '<script>alert("Images uploaded successfully !")</script>';
        echo '<script>window.location.href="kidsgallery.php";</script>';
    }
}
?>
