<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="container">


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <p onclick="window.print();" >print</p>
      <a href="kids.php">Back</a>
      <ol class="breadcrumb">
        <li><a href="kids.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">AICM </li>
      </ol>
    </section>
    <!-- Main content -->

    
            <div class="container">
              <h1><b>
        Agape Kids Choir  Profile

      </b>
      </h1><br/><br/><br/>
             <div class="row">
                  <?php
 $id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM kids where id=$id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

  $fullname = $row['fullname'];
  $dob = $row['dob'];
      $gender=$row['gender'];
      $skills=$row['skills'];
      $photo=$row['photo'];
}

                  ?>

      <div class="form-group">
        
       
                  
                      <img src="../images/<?php echo $photo;?>" width="70%">

                                    
                    <hr/>
                    
                                     <h3>Full Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $fullname;?></h3>
                    <hr/>

                      <h3>Date of birth:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $dob;?></h3>
                    <hr/>

                      <h3>Skills: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea style="border: none;" class="form-control"><?php echo $skills;?></textarea></h3>
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
