<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="container">


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <p onclick="window.print();" >print</p>
      <a href="kidsstaff.php">Back</a>
      <ol class="breadcrumb">
        <li><a href="kidsstaff.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">AICM </li>
      </ol>
    </section>
    <!-- Main content -->

    
            <div class="container">
              <h1><b>
        Agape kids Choir Staff's Profile

      </b>
      </h1><br/><br/><br/>
             <div class="row">
                  <?php
 $id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM kidsstaff where id=$id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

  $fullname = $row['fullname'];
  $empid = $row['empid'];
  $dob = $row['dob'];
      $gender=$row['gender'];
      $phone=$row['phone'];
      $email=$row['email'];
      $role=$row['role'];
      $address=$row['address'];
       $photo=$row['photo'];
}

                  ?>

      <div class="form-group">
        
        <?php echo $_GET['id'];?>
                  
                      <img src="../images/<?php echo $photo;?>" width="70%">

                                     <h3>Employee Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $empid;?></h3>
                    <hr/>
                    
                                     <h3>Full Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $fullname;?></h3>
                    <hr/>

                      <h3>Date of birth:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $dob;?></h3>
                    <hr/>

                      <h3>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $gender;?></h3>
                    <hr/>
                      
                    <h3>Phone: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $phone;?></h3>
                    <hr/>

                      <h3>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $email;?></h3>
                    <hr/>

                      <h3>Role: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $role;?></h3>
                    <hr/>

                      <h3>Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $address;?></h3>
                    <hr/>
                    </div>
                </div>
                <div class="form-group">
              
                </div>
            </div>  
  </div>
    
  <?php include 'includes/footer.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
