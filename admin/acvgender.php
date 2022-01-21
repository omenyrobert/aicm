<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body>
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 36px;" ><b>
        Agape Children's village 
      </b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="acv.php"><i class="fa fa-dashboard"></i>Back</a></li>
        <li class="active">Agape Children's village</li>
        <p onclick="window.print();" >Print</p>

      </ol>
       <form action="" method="GET" >
              <div class="row">
               

                <div class="col-md-4">
                  <select name="gender" class="form-control">
                        <option value="male" >Male</option>
                        <option value="female" >Female</option>
                      

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

                      if(isset($_GET['gender']))
{
  $gender=$_GET['gender'];

                         
                    $sql = "SELECT * FROM acv where gender='$gender'";
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
