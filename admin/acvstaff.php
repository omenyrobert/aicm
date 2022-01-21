<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 34px;" ><b>
        Agape Children's village Staff Members 
      </b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="acv.php"><i class="fa fa-dashboard"></i>Back</a></li>
        <li class="active">Agape Children's village</li>
        <p onclick="window.print();" >Print</p>
        <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
      </ol>
    </section>
    <br/><br/>
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
    <!-- Main content -->
   
           
            <div class="box-body">
             
            
<br/>

              <table id="example1" class="table table-bordered">
                <thead>
                   <th>Emp Id</th>
                  <th>Full Name</th>
                  <th>Date Of birth</th>
                  <th>Gender</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Address</th>
                  <th>Photo</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php

                         
                    $sql = "SELECT * FROM acvstaff ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                      $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <tr>
                        <td>".$row['empid']."</td>
                        <td>".$row['fullname']."</td>
                        <td>".$row['dob']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['phone']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['role']."</td>
                          <td>".$row['address']."</td>
                          <td>
                            <img src='".$image."' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['id']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td>
                           <a href='acvstaffview.php?id=$row[id]' class='btn btn-info'><i class='fa fa-user-edit'></i>View</a>

                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Del</button>
                          </td>
                        </tr>
                      ";
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
  <?php include 'includes/acvstaffmodal.php'; ?>
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
    url: 'acvstaffrow.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#efullname').val(response.fullname);
      $('#eempid').val(response.empid);
      $('#edob').val(response.dob);
      $('#egender').val(response.gender);
      $('#ephone').val(response.phone);
      $('#eemail').val(response.email);
      $('#erole').val(response.role);
      $('#eaddress').val(response.address);
      $('.fullname').html(response.fullname);
    }
  });
}
</script>
</body>
</html>
