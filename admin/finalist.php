<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="container">


  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <p onclick="window.print();" >print</p>
      
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Institutes and Universities</li>
      </ol>
    </section>
    <!-- Main content -->

   
    
            <div class="container">
              <h1><b>
        Agape Institute & University Scholarships' Finalists

      </b>
      </h1><br/><br/><br/>
              <table class="table table-bordered">
                <thead>
                  <th>Full Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Contact</th>
                  <th>University</th>
                  <th>Course</th>
                  <th>Level</th>
                  <th>Address</th>
                  <th>Family</th>
                  <th>Guardian</th>
                  <th>Guardian's Contact</th>
                </thead>
                <tbody>
                  <?php

                      
                         
                    $sql = "SELECT * FROM university WHERE level LIKE 'f%'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                          
                      echo "
                        <tr>
                        <td>".$row['firstname']."</td>
                        <td>".$row['dob']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['contact']."</td>
                          <td>".$row['university']."</td>
                          <td>".$row['course']."</td>
                          <td>".$row['level']."</td>
                          <td>".$row['address']."</td>
                          <td>".$row['family']."</td>
                          <td>".$row['guardians']."</td>
                          <td>".$row['guardiansco']."</td>

                        </tr>
                      ";
                    
                    }
                  ?>
                </tbody>
             
              </table>
            </div>  
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/universitymodal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
