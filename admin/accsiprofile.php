<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="container">


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <p onclick="window.print();" >print</p>
      <a href="accsi.php">Back</a>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">AICM </li>
      </ol>
    </section>
    <!-- Main content -->

     <h1><b>
        ACCS Bukerere Child's Profile

      </b>
      </h1>
            <div class="container" style="background: linear-gradient(
    to right, 
    #000000 0%, 
    #000000 50%, 
    #c75c22 50%, 
    #c75c22 100%
  );">
             <br/><br/><br/>
             <div class="row">
                  <?php
 $id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM accsi where id=$id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
  $cno = $row['cno'];
  $fullname = $row['fullname'];
  $dob = $row['dob'];
      $gender=$row['gender'];
      $school=$row['school'];
      $level=$row['level'];
      $class=$row['class'];
      $addressfrom=$row['addressfrom'];
      $family=$row['family'];
      $guardians=$row['guardians'];
        $guardiansco=$row['guardiansco'];
      $background=$row['background'];
      $health=$row['health'];
      $sponsor=$row['sponsor'];
       $photo=$row['photo'];
}

                  ?>

      <div class="row" style="margin: 20px; background-color: white; padding: 10px; border-radius: 25px; font-weight: bold;">
        <div class="col-xs-6">
        
        
                  
                      <img src="../images/<?php echo $photo;?>" width="100%">

<br/><br/>
                      <p>Background: <br/><br/><textarea class="form-control" style=" height: 70px; border: none;" ><?php echo $background;?></textarea></p>
                    <hr/>

                      <p>Health Condition:<br/><br/><textarea class="form-control" style=" height: 70px; border: none;" ><?php echo $health;?></textarea></p>
                    <hr/>

                      <p>Sponsor's details: <br/><br/><textarea class="form-control" style=" height: 70px; border: none;" > <?php echo $sponsor;?></textarea></p>
                    <hr/>
                    </div>
                    
                <div class="col-xs-6">
                                     <h1 style="font-size: 7vw; color: #b33b06;" ><b><?php echo $fullname;?></b></h1>
                    <hr/>
                     <p>Center Number:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $cno;?></b></p>
                     <br/>
                      <p>Date of birth:  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dob;?>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p><p> Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $gender;?></p>
                    <hr/>
                      
                    <p>School: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $school;?></p>
                    <hr/>
                      <p>Level: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $level;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Class: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $class;?></p>
                    <hr/>


                      <p>Address From: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $addressfrom;?></p>
                    <hr/>

                      <p>Family: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $family;?></p>

                         <hr/>

                      <p>Guardian: <br/><br/><textarea  class="form-control" style=" height: 70px; border: none;" ><?php echo $guardians;?></textarea></p>
                    <hr/>

                      <p>Guardian's contact: <br/><br/><textarea class="form-control" style=" height: 70px; border: none;" > <?php echo $guardiansco;?></textarea></p>
                    <hr/>
                  
                    </div>
                </div>
                <div class="form-group">
              
                </div>
            </div>  
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/universitymodal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
