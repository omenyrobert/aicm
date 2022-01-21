<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php 
  include 'includes/menubar.php'; 
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 40px;" ><b>
        Agape Institute & University Scholarships
      </b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Institutes and Universities</li>

      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
              <br/>
              <a href="viewuniversity.php" class="btn btn-success"><h4>Large View</h4></a>
               <a href="universitygallery.php" class="btn btn-warning"><h4>Gallery</h4></a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Full Name</th>
                  <th>Date of birth</th>
                  <th>Gender</th>
                  <th>Contact</th>
                  <th>University</th>
                  <th>Course</th>
                  <th>Level</th>
                  <th>Address</th>
                  <th>Family</th>
                  <th>Guardian</th>
                  <th>Guardian's Contact</th>
                  <th>Photo</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php

                      
                          $sql1 = "SELECT DATEDIFF('yr','dob') as age FROM university";
                    $query = $conn->query($sql1);
                    while($row = $query->fetch_assoc()){
                    $sql = "SELECT * FROM university";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                     

                      $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
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

                          <td>
                            <img src='".$image."' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['id']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Del</button>
                          </td>
                        </tr>
                      ";
                    }
                    }
                  ?>
                </tbody>
             
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/universitymodal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'universityrow.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#efirstname').val(response.firstname);
      $('#edob').val(response.dob);
      $('#egender').val(response.gender);
      $('#econtact').val(response.contact);
      $('#euniversity').val(response.university);
      $('#ecourse').val(response.course);
      $('#elevel').val(response.level);
      $('#eaddress').val(response.address);
      $('#efamily').val(response.family);
      $('#eguardians').val(response.guardians);
      $('#eguardiansco').val(response.guardiansco);
      $('.firstname').html(response.firstname);
    }
  });
}
</script>
</body>
</html>
