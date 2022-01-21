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
      <h1><b>
       Agape Women Of Worth
      </b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Agape Women Of Worth</li>

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
              <a href="budget3.php" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-print"></i>Print view</a>

              <a href="women2.php" class="btn btn-warning btn-sm btn-flat">Women Conference</a>
              <a href="women3.php" class="btn btn-warning btn-sm btn-flat">Pastor's Conference</a>
               <a href="women.php" class="btn btn-warning btn-sm btn-flat">Youth's Conference</a>

              <a href="womengallery.php" class="btn btn-success btn-sm btn-flat">Women Conference Gallery</a>
              <br/><br/>
             <h3><b>Pastors' Conference</b></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Item</th>
                  <th>Unicost</th>
                  <th>qty</th>
                  <th>Total</th>
                  <th>comment</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php

$sql=$conn->query("SELECT SUM(qty*unicost) AS sum FROM `budget3`  ") or die("Failed to fetch row!");
            while($fetch=$sql->fetch_assoc())
   {
                          $output = ""." ".$fetch['sum'];
                         }
                      
                         
                    $sql = "SELECT * FROM budget3";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                      echo "
                        <tr>
                        <td>".$row['item']."</td>
                        <td>".$row['unicost']."</td>
                          <td>".$row['qty']."</td>
                          <td>".$row['unicost']*$row['qty']."</td>
                          <td>".$row['comment']."</td>
                          <td>
                          <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Del</button>
                          </td>
                        </tr>
                      ";
                    
                    }
                  ?>
                </tbody>
             <tr><td colspan="3" ><h4><b>Total</b></h4></td><td><h4><b><?php echo $output;?></b></h4></td></tr>
              </table>
            </div>
          </div>


        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/womenmodal2.php'; ?>
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
    url: 'womenrow2.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      
      $('#eitem').val(response.item);
      $('#eunicost').val(response.unicost);
      $('#eqty').val(response.qty);
      $('#ecomment').val(response.comment);
  
      $('.item').html(response.item);
    }
  });
}
</script>
</body>
</html>
