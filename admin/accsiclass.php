<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 36px;" ><b>
        ACCS Iganga
      </b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="accsi.php"><i class="fa fa-dashboard"></i>Back</a></li>
        <li class="active">ACCS Iganga </li>
        <p onclick="window.print();" >Print</p>

      </ol>
       <form action="" method="GET" >
              <div class="row">
               

                <div class="col-md-4">
                  <select name="class" class="form-control">
                        <option value="Baby">Baby</option>
                        <option value="Middle">Middle</option>
                        <option value="Top">Top</option>
                        <option value="P1">P.1</option>
                        <option value="P2">P.2</option>
                        <option value="P3">P.3</option>
                        <option value="P4">P.4</option>
                        <option value="P5">P.5</option>
                        <option value="P6">P.6</option>
                        <option value="P7">P.7</option>
                        <option value="S1">S.1</option>
                        <option value="S2">S.2</option>
                        <option value="S3">S.3</option>
                        <option value="S4">S.4</option>
                        <option value="S5">S.5</option>
                        <option value="S6">S.6</option>
                        </select>
                </div>

                <div class="col-md-4">
                  <button class="form-control btn-primary " type="submit" >Generate</button>
                </div>
                
              </div>

            </form>
    </section>
    <!-- Main content -->
   
           
            <div class="box-body">
             
            
<br/>

              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Full Name</th>
                  <th>Date Of birth</th>
                  <th>Gender</th>
                  <th>School</th>
                  <th>level</th>
                  <th>Class</th>
                  <th>Address From</th>
                  <th>Guardians</th>
                  <th>Guardian's Contact</th>
                  <th>Photo</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php

                      if(isset($_GET['class']))
{
  $class=$_GET['class'];

                         
                    $sql = "SELECT * FROM accsi where class='$class'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){

                      $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                      echo "
                        <tr>
                        <td>".$row['fullname']."</td>
                        <td>".$row['dob']."</td>
                          <td>".$row['gender']."</td>
                          <td>".$row['school']."</td>
                          <td>".$row['level']."</td>
                          <td>".$row['class']."</td>
                          <td>".$row['addressfrom']."</td>
                          <td>".$row['guardians']."</td>
                          <td>".$row['guardiansco']."</td>

                          <td>
                            <img src='".$image."' width='30px' height='30px'>
                            <a href='#edit_photo' data-toggle='modal' class='pull-right photo' data-id='".$row['id']."'><span class='fa fa-edit'></span></a>
                          </td>
                          <td>
                           <a href='acvprofile.php?id=$row[id]' class='btn btn-info'><i class='fa fa-user-edit'></i>View</a>

                           
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
    url: 'acvrow.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#efullname').val(response.fullname);
      $('#edob').val(response.dob);
      $('#egender').val(response.gender);
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
