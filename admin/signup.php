
<?php
// Include database connection file
include 'includes/session.php';




  if (isset($_POST['signup'])) {
    
    $fullname = $conn->real_escape_string($_POST['fullname']);
     $email     = $conn->real_escape_string($_POST['email']);
    $role     = $conn->real_escape_string($_POST['role']);
    $password = $conn->real_escape_string(md5($_POST['password']));
   

    $query  = "INSERT INTO admins (fullname,email,password,role) VALUES ('$fullname','$email','$password','$role')";
    $result = $conn->query($query);

    if ($result==true) {
      $_SESSION['success'] = 'Account Created successfully';
      header("Location:accounts.php");
      die();
    }else{
      $errorMsg  = "You are not Registred..Please Try again";
    }   

  }

?>