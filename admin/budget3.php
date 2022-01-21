<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="container">
<div class="wrapper">




  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><b>
       Agape Women Of Worth
      </b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="women3.php"><i class="fa fa-dashboard"></i>back</a></li>
        <p onclick="window.print();" >print</p>
        <li class="active">Agape Women Of Worth</li>

      </ol>
    </section>
    <!-- Main content -->
    <section class="container">
           <center>
             <h3><b>Youth Camps Budget</b></h3>
           </center>
             
           
              <table class="table table-bordered">
                <thead style="background-color: green; color: white;" >

                  <th>Item</th>
                  <th>Unicost</th>
                  <th>qty</th>
                  <th>Total</th>
                  <th>comment</th>
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
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
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
    url: 'womenrow.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      
      $('#eitem').val(response.item);
      $('#eunitcost').val(response.unitcost);
      $('#eqty').val(response.qty);
      $('#ecomment').val(response.comment);
  
      $('.item').html(response.item);
    }
  });
}
</script>
</body>
</html>
