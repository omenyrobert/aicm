<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="container">


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <p onclick="window.print();" >print</p>
      <a href="printuniversityp.php">print profile</a>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Institutes and Universities</li>
      </ol>
    </section>
    <!-- Main content -->

   <form class="form-inline" method="POST" action="viewuniversity.php" style="color: black;" >
        <div class="input-group col-md-12">
          <input type="text" class="form-control" placeholder="Search here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
          <span class="input-group-btn">
            <button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
      </form>
      <br />
    
            <div class="container">

            
<?php
        if(ISSET($_POST['search'])){
          $keyword = $_POST['keyword'];
      ?>
      <div>
        <h2>Result</h2>
        <hr style="border-top:2px dotted #ccc;"/>
        <?php
          $query = mysqli_query($conn, "SELECT * FROM `university` WHERE `firstname` LIKE '%$keyword%'") or die(mysqli_error($conn));
          while($fetch = mysqli_fetch_array($query)){
        ?>
        <div style="word-wrap:break-word; background-color: #dce0dd; padding: 20px;">
          <img src="../images/<?php echo $fetch['photo']?>" width='80%'>

          <h1>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['firstname'], 0, 100)?></h1>
          <hr>
          <h3>Date of birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['dob'], 0, 100)?></h3>
          <hr>
          <h3>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['gender'], 0, 100)?></h3>
          <hr>
          <h3>Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['address'], 0, 100)?></h3>
          <hr>
          <h3>Contact: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['contact'], 0, 100)?></h3>
          <hr>
          <h3>University:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['university'], 0, 100)?></3>
          <hr>
          <h3>Course:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['course'], 0, 100)?></h3>
          <hr>
          <h3>Level:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['level'], 0, 100)?></h3>
          <hr>
          <h3>Family:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['family'], 0, 100)?></h3>
          <hr>
          <h3>Guardian:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['guardians'], 0, 100)?></h3>
          <hr>
          <h3>Guardian's Contact:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['guardiansco'], 0, 100)?></h3>
        </div>
        <hr style="border-bottom:1px solid #ccc;"/>
        <?php
          }
        ?>
      </div>
      <?php
        }
      ?>




              <h1><b>
        Agape Institute & University Scholarships

      </b>
      </h1><br/><br/><br/>
             <div class="row">
                  <?php

                      
                         
                    $sql = "SELECT * FROM university";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                          
                      echo "
                        <div class='col-lg-4 col-xs-6 text-center' style='background-color: #dce0dd; border: 5px white solid; padding: 10px;'>
                        <img src='../images/".$row['photo']."' width='80%'>
                        <h4>".$row['firstname']."&nbsp;&nbsp;".$row['contact']."</h4>
                          <h4>".$row['university']."&nbsp;&nbsp; ".$row['course']."</h4>
                          <h4>".$row['level']." &nbsp;&nbsp;".$row['address']."</h4>
                        </div>
                      ";
                    
                    }
                  ?>
                </div>
            </div>  
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/universitymodal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
