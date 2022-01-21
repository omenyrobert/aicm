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
        ACCS Bukerere Gallery
      </b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="accsb.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">ACCS Bukerere Gallery</li>

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
              <br/><br/>
                        
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
             
                  <?php

                      
                         
                    $sql = "SELECT * FROM accsbgallery";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                     

                      $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <div class'row'>
                        <div class='col-lg-4 col-xs-6'>
                       <a class='delete' data-id='".$row['id']."'>
                        <img src='".$image."' width='100%'>
                        </a>


                       </div>
                       <div>";
                    
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
  <?php include 'includes/accsbgmodal.php'; ?>
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
    url: 'accsbgrow.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#efullname').val(response.fullname);
      $('#edob').val(response.dob);

      $('#egender').val(response.gender);
      $('#ehouse').val(response.house);

      $('#eschool').val(response.school);
      $('#elevel').val(response.level);
      $('#eclass').val(response.class);
      $('#eaddressfrom').val(response.addressfrom);
      $('#efamily').val(response.family);
      $('#eguardians').val(response.guardians);
      $('#eguardiansco').val(response.guardiansco);
      $('#ebackground').val(response.background);
      $('#ehealth').val(response.health);
      $('#esponsor').val(response.sponsor);
      $('.fullname').html(response.fullname);
    }
  });
}
</script>
</body>
</html>
