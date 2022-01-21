<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="container">


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <p onclick="window.print();" >print</p>
      <br/>
         <form class="form-inline" method="POST" action="printuniversityp.php" style="color: black;" >
        <div class="input-group col-md-12">
          <input type="text" class="form-control" placeholder="Search here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
          <span class="input-group-btn">
            <button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
      </form>
      <br />
    
      
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Institutes and Universities</li>
      </ol>
    </section>
    <!-- Main content -->

            <div class="container">

            
<?php
        if(ISSET($_POST['search'])){
          $keyword = $_POST['keyword'];
      ?>
      <div>
        <h2>University/Institute Student Profile</h2>
        <?php
          $query = mysqli_query($conn, "SELECT * FROM `university` WHERE `firstname` LIKE '%$keyword%'") or die(mysqli_error($conn));
          while($fetch = mysqli_fetch_array($query)){
        ?>
        <div style="word-wrap:break-word; padding: 20px;">
          <img src="../images/<?php echo $fetch['photo']?>" width='60%'>

          <h4>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['firstname'], 0, 100)?></h4>
          <hr>
          <h4>Date of birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['dob'], 0, 100)?></h4>
          <hr>
          <h4>Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['gender'], 0, 100)?></h4>
          <hr>
          <h4>Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['address'], 0, 100)?></h4>
          <hr>
          <h4>Contact: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['contact'], 0, 100)?></h4>
          <hr>
          <h4>University:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['university'], 0, 100)?></h4>
          <hr>
          <h4>Course:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['course'], 0, 100)?></h>
          <hr>
          <h4>Level:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['level'], 0, 100)?></h4>
          <hr>
          <h4>Family:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['family'], 0, 100)?></h4>
          <hr>
          <h4>Guardian:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['guardians'], 0, 100)?></h4>
          <hr>
          <h4>Guardian's Contact:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo substr($fetch['guardiansco'], 0, 100)?></h4>
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

      </b>
      </h1><br/><br/><br/>
         
            </div>  
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/universitymodal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
